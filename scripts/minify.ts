import { minify } from "html-minifier";
import qrcode from "qrcode";
import sharp from "sharp";
const compiled = minify(await Bun.file("./build/compiled.html").text(), {
  collapseWhitespace: true,
  removeComments: true,
  minifyCSS: true,
  minifyJS: true,
});
Bun.write("./build/index.html", compiled);
// part 2, compile data url...
const htmlContent = await Bun.file("./build/index.html").text();
const dataURL = `data:text/html;base64,${Buffer.from(htmlContent).toString(
  "base64",
)}`
qrcode.toBuffer(dataURL, { width: 500 }).then((qr) => {
//   console.log(qr);
// Bun.write("./build/qr.png", qr);
sharp(__dirname+`/zeon.png`)
.resize(100)  // Resize the image to fit inside the QR code
.toBuffer(function (err, customImageBuffer) {
  if (err) {
    console.error('Error loading custom image:', err);
    return;
  }

  // Overlay the custom image in the center of the QR code
  sharp(qr)
    .composite([{ input: customImageBuffer, gravity: 'center' }]) // Place image in center
    .toFile('./build/qr.png', function (err, info) {
      if (err) {
        console.error('Error saving the final image:', err);
        return;
      }
      Bun.spawnSync([`cp`, `./build/qr.png`, `./qr.png`]);
      console.log('QR code with custom image saved as qr-code-with-image.png');
    });
});
});
