@extends('backend.layouts.app')
@section('content')
<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Settings</h4>
            </div>
        </div>
    </div>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="card">
            <div class="row">
                <div class="col-md-4" style="border-right: 2px solid rgba(0, 0, 0, 0.479);">
                    <div class="card-header bg-white">
                        <h4 class="text-center">General Settings</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <input type="text" class="form-control" name="website_name" placeholder="Website Name">
                        </div>
                        <div class="form-group">
                            <textarea name="description" id="description" class="form-control" placeholder="Description"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" name="contact_1" placeholder="Contact number">
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" name="contact_2" placeholder="Contact number (Alternate)">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="po_box" placeholder="P.O. Box">
                        </div>
                        <div class="form-group">
                            <input type="url" class="form-control" name="url" placeholder="https:://www.example.com">
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="border-right: 2px solid rgba(0, 0, 0, 0.479);">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-header bg-white">
                                <h4 class="text-center">SEO Settings</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="meta_title" placeholder="Meta title">
                                </div>
                                <div class="form-group">
                                    <textarea name="meta_description" id="meta_description" class="form-control" placeholder="Meta description"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="meta_keyword" placeholder="Meta Keyword">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-header bg-white">
                                <h4 class="text-center">Logo & Favicon</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="logo">Logo</label>
                                    <input type="file" class="form-control" name="logo">
                                </div>
                                <div class="form-group">
                                    <label for="favicon">Favicon</label>
                                    <input type="file" class="form-control" name="favicon">
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-md-4">
                    <div class="card-header bg-white">
                        <h4 class="text-center">Social Settings</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <input type="text" class="form-control" name="facebook" placeholder="Facebook">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="instagram" placeholder="Instagram">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="twitter" placeholder="Twitter">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="linkedin" placeholder="Linkedin">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="google_plus" placeholder="Google Plus">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="youtube" placeholder="Youtube">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="tiktok" placeholder="Tiktok">
                        </div>
                        <div class="form-group">
                            <textarea name="google_map" class="form-control" id="google_map" placeholder="Google map link"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-3">
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary w-sm">Save</button>
                </div>
            </div>
        </div>
    </form>
    <!-- end page title -->
</div> <!-- container-fluid -->
@endsection
