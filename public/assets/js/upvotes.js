document.querySelectorAll('.feedback-upvote').forEach(btn => {
    btn.addEventListener('click', async function() {
        let parent = this.closest('.feedback-upvote');
        let id = parent.getAttribute('data-id');

        let res = await fetch(`${BASE}/reclamacao/${id}/upvote`, {
            method: 'POST',
            headers: { 'X-Requested-With': 'XMLHttpRequest' }
        });

        let json = await res.json();

        if (json.total !== undefined) {
            parent.querySelector('.upvote-count').innerText = json.total;
            this.classList.toggle('active', json.status === 'upvoted');
        }
    });
});
