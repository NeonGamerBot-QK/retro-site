import fs from "fs";
import { join } from "path";
console.log(`Building project...`);
const src = join(__dirname, "..", "src");
const out = join(__dirname, "..", "build");
if (fs.existsSync(out)) fs.rmSync(out, { recursive: true });
fs.cpSync(src, out, { recursive: true });
fs.mkdirSync(join(out, "build_info"));
fs.writeFileSync(
  join(out, "build_info", "commit_id"),
  process.env.BUILD_SHA || "",
);
fs.writeFileSync(
  join(out, "build_info", "build_id"),
  process.env.BUILD_ID || "",
);
if (process.env.COMPILE_HTML_VERSION) {
  // for static dl
  const php = await import("php");
  //@ts-expect-error
  const outD = await php.runWithData("../build/index.php", { IS_DEV: 0 });
  fs.writeFileSync(join(out, "compiled.html"), outD);
}
console.log(`Built files`);
