document.addEventListener('DOMContentLoaded', function() {
    const canvas = document.getElementById('signature-pad');
    const context = canvas.getContext('2d');
    let isDrawing = false;

    canvas.addEventListener('mousedown', startDrawing);
    canvas.addEventListener('mousemove', draw);
    canvas.addEventListener('mouseup', stopDrawing);
    canvas.addEventListener('mouseout', stopDrawing);

    document.getElementById('clear-btn').addEventListener('click', clearSignature);
    // document.getElementById('save-btn').addEventListener('click', saveSignature);

    function startDrawing(e) {
        isDrawing = true;
        draw(e);
    }

    function draw(e) {
        if (!isDrawing) return;

        context.lineWidth = 2;
        context.lineCap = 'round';
        context.strokeStyle = '#000';

        const rect = canvas.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        context.lineTo(x, y);
        context.stroke();
        context.beginPath();
        context.moveTo(x, y);
    }

    function stopDrawing() {
        isDrawing = false;
        context.beginPath();
    }

    function clearSignature() {
        context.clearRect(0, 0, canvas.width, canvas.height);
    }

    function saveSignature() {
        const dataURL = canvas.toDataURL('image/png');
        const link = document.createElement('a');
        link.href = dataURL;
        link.download = 'signature.png';
        link.click();
    }
});