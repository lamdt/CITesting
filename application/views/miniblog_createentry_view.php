New entry
<hr>
<?php 
echo validation_errors(); 
echo form_open('miniblog/createentry');
?>
Title: <input type="text" name="<?php echo _ENTRY_TITLE_;?>" size="50"> <?php echo form_error(_ENTRY_TITLE_); ?> <br/>

Body: <textarea name="<?php echo _ENTRY_BODY_;?>" cols="50"></textarea> <?php echo form_error(_ENTRY_BODY_); ?><br />
<input type="submit">
</form>

<a href="<?php echo _URL_?>miniblog">HOME</a>
