import 'izifir.core.components.layout.reboot';
import 'izifir.core.components.layout.grid';

export const detectWebpSupport = async () => {
  if (!createImageBitmap) {
    return false;
  }

  const webpData = 'data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoCAAEAAQAcJaQAA3AA/v3AgAA=';
  const blob = await fetch(webpData).then(r => r.blob());

  return createImageBitmap(blob).then(() => true, () => false);
}
