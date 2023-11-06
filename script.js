function addComment() {
  var commentInput = document.getElementById('commentInput');
  var commentText = commentInput.value;
  
  if (commentText.trim() !== '') {
      var commentsDiv = document.getElementById('comments');
      var newComment = document.createElement('p');
      newComment.textContent = commentText;
      commentsDiv.appendChild(newComment);
      commentInput.value = '';

      // Kirim data komentar ke server menggunakan AJAX
      var xhr = new XMLHttpRequest();
      xhr.open('POST', 'save_comment.php', true);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      xhr.onreadystatechange = function() {
          if (xhr.readyState == 4 && xhr.status == 200) {
              console.log('Komentar berhasil disimpan');
          }
      };
      xhr.send('comment=' + encodeURIComponent(commentText));
  }
}

function likeCV() {
  alert('CV Disukai!');

  // Kirim data "like" ke server menggunakan AJAX
  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'save_like.php', true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.onreadystatechange = function() {
      if (xhr.readyState == 4 && xhr.status == 200) {
          console.log('Like berhasil disimpan');
      }
  };
  xhr.send();
}
