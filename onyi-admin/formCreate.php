<form action="" method="post" enctype="multipart/form-data" class="was-validated">
    <h4 class="text-center"style="font-family: 'Times New Roman', Times, serif; color:green;"><?php if(isset($msg)) echo $msg; ?></h4>
    <div class="form-group">
        <!-- category title -->
        <label for="name"style="margin-left:2px; margin-top:10px;font-size:15px;font-family: 'Times New Roman', Times, serif">Category Title</label>
        <input type="text" class="form-control" id="name" name="ncontent"  style="font-size:15px;font-family: 'Times New Roman', Times, serif" placeholder="Title" required>
        

        <!-- category discription -->
        <label for="name"style="margin-left:2px; margin-top:10px;font-size:15px;font-family: 'Times New Roman', Times, serif">Category Description</label><br>
        <textarea class="form-control" id="name" name="product"  style="width:100%; font-size:15px;font-family: 'Times New Roman', Times, serif" required></textarea>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
        
        <!-- comment -->
        <label for="name"style="margin-left:2px; margin-top:10px;font-size:15px;font-family: 'Times New Roman', Times, serif">Comment</label><br>
        <textarea class="form-control" id="name" name="comment" style="width:100%; font-size:15px;font-family: 'Times New Roman', Times, serif" required></textarea>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="form-group" >
                <label style="margin-left:2px; margin-top:10px;font-size:15px;font-family: 'Times New Roman', Times, serif">Category Type</label>
                <select class="form-control" name="scategory" style="background-color:gainsboro;font-size:15px;font-family: 'Times New Roman', Times, serif" required >
                    <option>Ankara Agbada</option>
                    <option>Ankara Agbada Long Gowns</option>
                    <option>Ankara Agbada Short Gowns</option>
                    <option>Ankara Long Gowns</option>
                    <option>Ankara Short Gowns</option>
                    <option>Ankara Crop Tops</option>
                    <option>Ankara Flare Short Gowns</option>
                    <option>Ankara Maxi Gowns</option>
                    <option>Senator Wears</option>
                    <option>Stylish Ankara designs</option>
                </select> 
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <label style="margin-left:2px; margin-top:10px;font-size:15px;font-family: 'Times New Roman', Times, serif">Rank</label>
                <select class="form-control"  name="srank"  style="background-color:gainsboro;" required>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                </select> 
            </div>
        </div>
        <div class="col-lg-4">
            <label style="margin-left:2px; margin-top:10px;font-size:15px;font-family: 'Times New Roman', Times, serif">Feature Images</label><br>
                <input type="file" name="pix"  placeholder="required">     
        </div>
    </div>

    <br><br>
    <input type="submit" class="btn btn-secondary" value="submit" name="submit" style="font-size:15px;font-family: 'Times New Roman', Times, serif">
</form>