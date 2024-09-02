import { join } from "path";
import php from "php";
const server = Bun.serve({
  port: 3000,
  development: true,
  async fetch(request) {
    if (process.env.SYNC_BADGES) {
      await import("./sync-badges");
    }
    //@ts-expect-error
    const out = await php.runWithData(join(__dirname, "../src/index.php"), {
      IS_DEV: 1,
    });
    return new Response(out, {
      headers: {
        "Content-Type": "text/html",
      },
    });
  },
});

console.log(`Listening on ${server.url}`);
