import * as FilePond from "filepond";

import FilePondPluginCopyPath from "filepond-plugin-copy-path";

FilePond.registerPlugin(FilePondPluginCopyPath);

const pond = FilePond.create({
  name: "filepond",
});

// Add it to the DOM
document.body.appendChild(pond.element);

