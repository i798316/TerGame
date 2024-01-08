<!-- partials/comment.blade.php (Vista Parcial) -->
<h5>Make Comentary</h5>
<form action="{{ route('addComment', $game) }}" method="post">

        <textarea class="form-control" name="comment" placeholder="Leave a comment here" id="floatingTextarea" required></textarea>
        <label for="floatingTextarea">Your comment</label>
    

    <div class="row">
        <h5 class="col-md-2" for="rate">Rate (1-5):</h5>
        <div class="rating col-md-2">
            <input type="radio" name="rate" value="5" id="5" checked><label for="5">☆</label>
            <input type="radio" name="rate" value="4" id="4"><label for="4">☆</label>
            <input type="radio" name="rate" value="3" id="3"><label for="3">☆</label>
            <input type="radio" name="rate" value="2" id="2"><label for="2">☆</label>
            <input type="radio" name="rate" value="1" id="1"><label for="1">☆</label>
        </div>

    </div>


    <th><button type="submit">Comment</button></td>

        </table>
</form>
