function showEmail() {
    const user = "info";
    const domain = "lattespa.co.jp";
    const address = `${user}@${domain}`;
    mailLink = document.getElementById('mail_link');
    mailLink.setAttribute('href', `mailto:${address}`);
    span = document.createElement('span');
    span.innerHTML = address;
    mailLink.appendChild(span);
}