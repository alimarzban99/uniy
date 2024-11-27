<!-- Profile Settings Start -->
<div class="modal fade" id="editprofile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-bottom p-3">
                <h5 class="modal-title" id="exampleModalLabel">تنظیمات پروفایل</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-3 pt-4">
                <form class="mt-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">نام کوچک</label>
                                <input name="name" id="name" type="text" class="form-control"
                                       placeholder="نام کوچک :">
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">نام خانوادگی</label>
                                <input name="name" id="name2" type="text" class="form-control"
                                       placeholder="نام خانوادگی :">
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label"> ایمیل شما </label>
                                <input name="email" id="email" type="email" class="form-control"
                                       placeholder="ایمیل شما :">
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">شماره تلفن</label>
                                <input name="number" id="number" type="text" class="form-control"
                                       placeholder="شماره تلفن :">
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">بیوگرافی شما اینجاست</label>
                                <textarea name="comments" id="comments" rows="4" class="form-control"
                                          placeholder="بیوگرافی :"></textarea>
                            </div>
                        </div>
                    </div>
                    <!--end row-->

                    <div class="row">
                        <div class="col-sm-12">
                            <input type="submit" id="submit" name="send" class="btn btn-primary"
                                   value="اعمال تغییرات">
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </form>
                <!--end form-->
            </div>
        </div>
    </div>
</div>
<!-- Profile Settings End -->
