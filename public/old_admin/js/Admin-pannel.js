function showCustomAlert(options) {
    const overlay = document.createElement('div');
    overlay.className = 'custom-alert-overlay';

    const box = document.createElement('div');
    box.className = 'custom-alert-box';

    const title = document.createElement('div');
    title.className = 'custom-alert-title';
    title.textContent = options.title || 'Alert';

    const text = document.createElement('div');
    text.className = 'custom-alert-text';
    text.textContent = options.text || '';

    const btnConfirm = document.createElement('button');
    btnConfirm.className = 'custom-alert-btn custom-alert-confirm';
    btnConfirm.textContent = options.confirmText || 'Confirm';

    const btnCancel = document.createElement('button');
    btnCancel.className = 'custom-alert-btn custom-alert-cancel';
    btnCancel.textContent = options.cancelText || 'Cancel';

    btnConfirm.onclick = function () {
        document.body.removeChild(overlay);
        if (typeof options.onConfirm === 'function') options.onConfirm();
    };
    btnCancel.onclick = function () {
        document.body.removeChild(overlay);
        if (typeof options.onCancel === 'function') options.onCancel();
    };

    box.appendChild(title);
    box.appendChild(text);
    box.appendChild(btnConfirm);
    box.appendChild(btnCancel);
    overlay.appendChild(box);
    document.body.appendChild(overlay);
}

document.getElementById('logout-btn').addEventListener('click', function (e) {
    e.preventDefault();
    showCustomAlert({
        title: 'Are you sure?',
        text: 'You will be logged out.',
        confirmText: 'Yes, logout',
        cancelText: 'Cancel',
        onConfirm: function () {
            document.getElementById('logout-form').submit();
        }
    });
});
