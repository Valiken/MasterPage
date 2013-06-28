<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
        <h3 id="myModalLabel">Contact Me!</h3>
    </div>
    <div class="modal-body">
        <p>Feel free to contact me at any time. Other contact information can be found on my resume page.</p> 
        <form method="post" action="">
            <fieldset>
                <legend></legend>
                <label>Name: </label>
                <input type="text" name="your_name" placeholder="Your Name" value="<?php echo $yourname; ?>" required>
                <label>Company: (Optional)</label>
                <input type="text" name="your_company" placeholder="Your Company" value="<?php echo $yourcompany; ?>" >
                <label>Email:</label>
                <input type="text" name="your_email" placeholder="Your Email" value="<?php echo $youremail; ?>" required>
                <label>Comments: (Optional)</label>
                <textarea name="your_message" placeholder="Comments..."><?php echo $yourmessage; ?></textarea>
                <br />
                <input type="submit" value="Send" class="btn btn-inverse" name="contact_submitted" />
            </fieldset>    
        </form>
    </div>
    <div class="modal-footer">
        <button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">Close</button>
    </div>
</div>