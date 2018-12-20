<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: Arup-->
<!-- * Date: 12/11/2018-->
<!-- * Time: 10:35 AM-->
<!-- */-->
<div class="sidebar-container">
	<div class="sidemenu-container navbar-collapse collapse fixed-menu">
		<div id="remove-scroll" class="left-sidemenu">
			<ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
				<li class="sidebar-toggler-wrapper hide">
					<div class="sidebar-toggler">
						<span></span>
					</div>
				</li>
				<li class="sidebar-user-panel">
					<div class="user-panel">
						<div class="pull-left image">
							<img src="<?= base_url()?>assets/img/dp.jpg" class="img-circle user-img-circle" alt="User Image" />
						</div>
						<div class="pull-left info">
							<p> Dr.Kiran Patel</p>
							<a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline"> Online</span></a>
						</div>
					</div>
				</li>
				<li class="nav-item  ">
					<a href="<?= base_url()?>dashboard" class="nav-link nav-toggle"> <i class="fa fa-dashboard "></i>
						<span class="title">Dashboard</span>
					</a>
				</li>
				<li class="nav-item start">
					<a href="#" class="nav-link nav-toggle">
						<i class="fa fa-bed"></i>
						<span class="title">Admission</span>
						<span class="selected"></span>
						<span class="arrow open"></span>
					</a>
					<ul class="sub-menu">
						<li class="nav-item">
							<a href="<?= base_url()?>admission_entry" class="nav-link ">
								<span class="title">Admission Entry</span>
								<span class="selected"></span>
							</a>
						</li>
						<li class="nav-item ">
							<a href="<?= base_url()?>patient_list" class="nav-link ">
								<span class="title">Patient List</span>
							</a>
						</li>
						<li class="nav-item  ">
							<a href="<?= base_url()?>release_entry" class="nav-link ">
								<span class="title">Release Entry</span>
							</a>
						</li>

						<li class="nav-item  ">
							<a href="<?= base_url()?>transfer_entry" class="nav-link ">
								<span class="title">Transfer Entry</span>
							</a>
						</li>

						<li class="nav-item  ">
							<a href="<?= base_url()?>bed_allocation" class="nav-link ">
								<span class="title">Bed Allocation</span>
							</a>
						</li>
						<li class="nav-item  ">
							<a href="<?= base_url()?>discharge_entry" class="nav-link ">
								<span class="title">Discharge Entry</span>
							</a>
						</li>
					</ul>
				</li>

				<li class="nav-item start">
					<a href="#" class="nav-link nav-toggle">
						<i class="fa fa-medkit"></i>
						<span class="title">Pharmacy</span>
						<span class="selected"></span>
						<span class="arrow open"></span>
					</a>
					<ul class="sub-menu">
						<li class="nav-item">
							<a href="<?= base_url()?>sales_entry" class="nav-link ">
								<span class="title">Sales Entry</span>
								<span class="selected"></span>
							</a>
						</li>
						<li class="nav-item ">
							<a href="<?= base_url()?>purchase_entry" class="nav-link ">
								<span class="title">Purchase Entry</span>
							</a>
						</li>
						<li class="nav-item  ">
							<a href="<?= base_url()?>stock" class="nav-link ">
								<span class="title">Stock</span>
							</a>
						</li>

						<li class="nav-item  ">
							<a href="<?= base_url()?>sales_return" class="nav-link ">
								<span class="title">Sales Return</span>
							</a>
						</li>

						<li class="nav-item  ">
							<a href="<?= base_url()?>purchase_return" class="nav-link ">
								<span class="title">Purchase Return</span>
							</a>
						</li>
						<li class="nav-item  ">
							<a href="<?= base_url()?>sales_record" class="nav-link ">
								<span class="title">Sales Record</span>
							</a>
						</li>
						<li class="nav-item  ">
							<a href="<?= base_url()?>purchase_record" class="nav-link ">
								<span class="title">Purchase Record</span>
							</a>
						</li>
						<li class="nav-item  ">
							<a href="<?= base_url()?>supplier" class="nav-link ">
								<span class="title">Supplier Entry</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item start">
					<a href="#" class="nav-link nav-toggle">
						<i class="fa fa-user-md"></i>
						<span class="title">Doctors & Stuff</span>
						<span class="selected"></span>
						<span class="arrow open"></span>
					</a>
					<ul class="sub-menu">
						<li class="nav-item">
							<a href="<?= base_url()?>doctor_entry" class="nav-link ">
								<span class="title">Doctor Entry</span>
								<span class="selected"></span>
							</a>
						</li>
						<li class="nav-item ">
							<a href="<?= base_url()?>stuff_entry" class="nav-link ">
								<span class="title">Stuff Entry</span>
							</a>
						</li>
						<li class="nav-item  ">
							<a href="<?= base_url()?>doctor_list" class="nav-link ">
								<span class="title">Doctor List</span>
							</a>
						</li>

						<li class="nav-item  ">
							<a href="<?= base_url()?>stuff_list" class="nav-link ">
								<span class="title">Stuff List</span>
							</a>
						</li>

						<li class="nav-item  ">
							<a href="<?= base_url()?>salary_payment" class="nav-link ">
								<span class="title">Salary Payment</span>
							</a>
						</li>

					</ul>
				</li>

				<li class="nav-item start">
					<a href="#" class="nav-link nav-toggle">
						<i class="material-icons">content_cut</i>
						<span class="title">Operation Theater</span>
						<span class="selected"></span>
						<span class="arrow open"></span>
					</a>
					<ul class="sub-menu">
						<li class="nav-item">
							<a href="<?= base_url()?>operation_schedule_entry" class="nav-link ">
								<span class="title">Schedule Entry</span>
								<span class="selected"></span>
							</a>
						</li>
						<li class="nav-item ">
							<a href="<?= base_url()?>operation_schedule_list" class="nav-link ">
								<span class="title">Schedule List</span>
							</a>
						</li>
						<li class="nav-item  ">
							<a href="<?= base_url()?>theater_entry" class="nav-link ">
								<span class="title">Theater Entry</span>
							</a>
						</li>

					</ul>
				</li>
				<li class="nav-item start">
					<a href="#" class="nav-link nav-toggle">
						<i class="fa fa-usd"></i>
						<span class="title">Accounts</span>
						<span class="selected"></span>
						<span class="arrow open"></span>
					</a>
					<ul class="sub-menu">
						<li class="nav-item">
							<a href="<?= base_url()?>expense_entry" class="nav-link ">
								<span class="title">Expense Entry</span>
								<span class="selected"></span>
							</a>
						</li>
						<li class="nav-item ">
							<a href="<?= base_url()?>bill_entry" class="nav-link ">
								<span class="title">Bill Entry</span>
							</a>
						</li>
						<li class="nav-item  ">
							<a href="<?= base_url()?>bill_collection" class="nav-link ">
								<span class="title">Bill Collection</span>
							</a>
						</li>

					</ul>
				</li>
				<li class="nav-item start">
					<a href="#" class="nav-link nav-toggle">
						<i class="fa fa-flask"></i>
						<span class="title">Lab</span>
						<span class="selected"></span>
						<span class="arrow open"></span>
					</a>
					<ul class="sub-menu">
						<li class="nav-item">
							<a href="<?= base_url()?>patient_test_entry" class="nav-link ">
								<span class="title">Patient Test Entry</span>
								<span class="selected"></span>
							</a>
						</li>
						<li class="nav-item ">
							<a href="<?= base_url()?>test_report_delivery" class="nav-link ">
								<span class="title">Test Report Delivery</span>
							</a>
						</li>
						<li class="nav-item  ">
							<a href="<?= base_url()?>test_report_create" class="nav-link ">
								<span class="title">Test Report Create</span>
							</a>
						</li>

					</ul>
				</li>
				<li class="nav-item start">
					<a href="#" class="nav-link nav-toggle">
						<i class="fa fa-gears"></i>
						<span class="title">Administration</span>
						<span class="selected"></span>
						<span class="arrow open"></span>
					</a>
					<ul class="sub-menu">
						<li class="nav-item">
							<a href="<?= base_url()?>department" class="nav-link ">
								<span class="title">Department</span>
								<span class="selected"></span>
							</a>
						</li>
						<li class="nav-item ">
							<a href="<?= base_url()?>designation" class="nav-link ">
								<span class="title">Designation</span>
							</a>
						</li>
						<li class="nav-item  ">
							<a href="<?= base_url()?>expense_head" class="nav-link ">
								<span class="title">Expense Head</span>
							</a>
						</li>
						<li class="nav-item  ">
							<a href="<?= base_url()?>salary_month" class="nav-link ">
								<span class="title">Salary Month</span>
							</a>
						</li>
						<li class="nav-item  ">
							<a href="<?= base_url()?>test_report_template" class="nav-link ">
								<span class="title">Test Report Template</span>
							</a>
						</li>

					</ul>
				</li>

			</ul>
		</div>
	</div>
</div>
