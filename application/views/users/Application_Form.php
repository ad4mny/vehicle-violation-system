<div class="container px-4 py-2">
    <div class="row my-3">
        <div class="col">
            <h1 class="display-4">Apply Vehicle Sticker</h1>
            <p class=" text-justify">Fill in the form to apply for vehicle sticker.</p>
        </div>
    </div>
    <form action="<? echo base_url(); ?>sticker/apply/submit" method="post" enctype="multipart/form-data">
        <div class="row mb-3">
            <div class="col-4">
                <div class="form-group">
                    <h5 class="border-bottom pb-1">Student Detail</h5>
                </div>
                <div class="form-group pb-2">
                    <small>Full Name</small>
                    <input type="text" class="form-control text-uppercase" name="name" required>
                </div>
                <div class="form-group pb-2">
                    <small>Matric ID / Staff ID</small>
                    <input type="text" class="form-control text-uppercase" name="id" required>
                </div>
                <div class="form-group pb-2">
                    <small>Residential Address</small>
                    <textarea class="form-control text-uppercase" row="3" max="150" name="address" required></textarea>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <h5 class="border-bottom pb-1">Vehicle Detail</h5>
                </div>
                <div class="form-group pb-2">
                    <small>Vehicle</small>
                    <select class="form-select" name="type" required>
                        <option value="CAR">CAR</option>
                        <option value="MOTOCYCLE">MOTOCYCLE</option>
                    </select>
                </div>
                <div class="form-group pb-2">
                    <small>Brand</small>
                    <input type="text" class="form-control" placeholder="PERODUA MYVI" name="brand" required>
                </div>
                <div class="form-group pb-2">
                    <small>Registration No.</small>
                    <input type="text" class="form-control" placeholder="AAA 8888" name="reg" required>
                </div>
                <div class="form-group pb-2">
                    <small>Colour</small>
                    <input type="text" class="form-control" placeholder="SILVER" name="colour" required>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <h5 class=" border-bottom pb-1">Roadtax & Licence Detail</h5>
                </div>
                <div class="form-group pb-2">
                    <small>Roadtax's Valid Date</small>
                    <input type="date" class="form-control" placeholder="02/02/2020" name="roadtax" required>
                </div>
                <div class="form-group pb-2">
                    <small>Licence's Valid Date</small>
                    <input type="date" class="form-control" placeholder="20/04/2020" name="licence_valid" required>
                </div>
                <div class="form-group pb-2">
                    <small>Licence's No.</small>
                    <input type="text" class="form-control" placeholder="JEA20018917" name="licence_no" required>
                </div>
                <div class="form-group pb-2">
                    <small>Licence's Class</small>
                    <select class="form-select" name="licence_type" required>
                        <option value="B">B</option>
                        <option value="B2">B2</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                    </select>
                </div>
                <div class="form-group pb-2">
                    <small>Upload Vehicle Grant</small>
                    <input type="file" class="form-control" id="inputGroupFile01" name="grant" required>
                    <small class="text-muted" id="file_info">*Only .jpg/jpeg file allowed</small>
                </div>
            </div>
            <div class="col-12 text-center py-3">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="submit">
                        <i class="fas fa-chevron-right fa-fw fa-xs"></i> Confirm Details & Apply Sticker
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>