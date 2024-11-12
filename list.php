
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Address Book</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Address Book</li>
                            </ol>
                            <a href="<?php echo BASEURL ; ?>/addressbook/create_new" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</a>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->

                <div class="row">
                    <div class="col-12">
					<?php if($this->session->flashdata('success')){?>
							 <div class="alert alert-success alert-rounded"> <i class="ti-user"></i> <?php echo $this->session->flashdata('success');?><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                             </div>
					<?php }?>	
					<?php if($this->session->flashdata('error')){?>
							 <div class="alert alert-danger alert-rounded"> <i class="ti-user"></i> <?php echo $this->session->flashdata('error');?><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                             </div>
						<?php }?>	
					</div>
				</div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- .left-right-aside-column-->
                            <div class="contact-page-aside" id="address_book">                               
                                <div class="right-aside ">
                                    <div class="right-page-header">
                                        <div class="d-flex">
                                            <div class="align-self-center">
                                                <h4 class="card-title m-t-10">Address Book </h4></div>
                                            <div class="ml-auto">
<!--
                                                <input type="text" id="demo-input-search2" placeholder="search contacts" class="form-control">
-->
					<div class="btn-group">
						<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-upload"></i> &nbsp;&nbsp;Import
						</button>
						<div class="dropdown-menu" x-placement="top-start" style="position: absolute; transform: translate3d(0px, -204px, 0px); top: 0px; left: 0px; will-change: transform;">
							<a class="dropdown-item" href="<?php echo BASEURL ; ?>/upload"><i class="fas fa-upload"></i> Import CSV</a>
							<a class="dropdown-item" href="<?php echo BASEURL ; ?>/upload/downloadFile"><i class="fas fa-download"></i> Download Sample CSV</a>
						</div>
					</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                         <table id="addressBookTable" class="table m-t-30 table-hover no-wrap contact-list" data-page-size="10">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Name</th>
                                                    <th>Address</th>
                                                    <th>City</th>
                                                    <th>State</th>
                                                    <th>Zip</th>
                                                    <th>Create Date</th>                                                   
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
<!--
											<tr>
                                                    <td>1</td>
                                                    <td>
                                                        <a href="https://sendtail.com/addressbook/create_new">
                                                        Gurvinder Singh</a>
                                                    </td>
                                                    <td>185 Berry St</td>
                                                    <td>San Francisco</td>
                                                    <td>Alaska</td>
                                                    <td>94107</td>
                                                    <td>8/29/2018</td>                                                    
                                                    <td>
														<a href="https://sendtail.com/addressbook/" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Edit"><i class="ti-pencil" aria-hidden="true"></i></a>
                                                        <a href="https://sendtail.com/addressbook/" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
-->
												<tr>
                                                    <td>1</td>
                                                    <td>
                                                        <a href="https://sendtail.com/addressbook/create_new">
                                                        Mickey Mantle</a>
                                                    </td>
                                                    <td>1 E 161st St</td>
                                                    <td>Bronx</td>
                                                    <td>New York</td>
                                                    <td>10451</td>
                                                    <td>8/28/2018</td>                                                    
                                                    <td>
														<a href="https://sendtail.com/addressbook/" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Edit"><i class="ti-pencil" aria-hidden="true"></i></a>
                                                        <a  href="https://sendtail.com/addressbook/" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
<!--
												<tr>
                                                    <td>3</td>
                                                    <td>
                                                        <a href="https://sendtail.com/addressbook/create_new">
                                                        Leore Avidar</a>
                                                    </td>
                                                    <td>185 Berry St</td>
                                                    <td>San Francisco</td>
                                                    <td>California</td>
                                                    <td>14554</td>
                                                    <td>8/27/2018</td>                                                    
                                                    <td>
														<a href="https://sendtail.com/addressbook/" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Edit"><i class="ti-pencil" aria-hidden="true"></i></a>
                                                        <a href="https://sendtail.com/addressbook/" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
-->
																								                                               
                                            </tbody>
                                           
                                        </table>
                                    </div>
                                    <!-- .left-aside-column-->
                                </div>
                                <!-- /.left-right-aside-column-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
             
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
     
