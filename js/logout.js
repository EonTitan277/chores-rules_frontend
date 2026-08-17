function logout() {
    fetch('/logout.php', { method: 'POST' })
    .then(() => { window.location.href = '/login.php'; })
    .catch((err) => { console.error('Logout failed:', err); window.location.href = '/login.php'; });
}