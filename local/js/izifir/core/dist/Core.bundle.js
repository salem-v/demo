this.BX=this.BX||{},function(t){"use strict";t.detectWebpSupport=async()=>{if(!createImageBitmap)return!1;const t=await fetch("data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoCAAEAAQAcJaQAA3AA/v3AgAA=").then((t=>t.blob()));return createImageBitmap(t).then((()=>!0),(()=>!1))}}(this.BX.Izifir=this.BX.Izifir||{});
