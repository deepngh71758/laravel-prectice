<h1>This is first page</h1>

<input type="text" placeholder="enter id" id="id">

<button onclick="goToSecond()">Second</button>

<script>
function goToSecond() {
    let id = document.getElementById('id').value;
    window.location.href = "/second/" + id;
}
</script>
