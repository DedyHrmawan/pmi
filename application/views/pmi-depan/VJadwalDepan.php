<!--begin::Wrapper-->
<div class="pb-15 pt-18 landing-red-bg">
	<!--begin::Container-->
	<div class="container">
		<!--begin::Heading-->
		<div class="text-center mt-8 mb-8" id="" data-kt-scroll-offset="{default: 100, lg: 150}">
			<!--begin::Title-->
			<h3 class="fs-2hx text-white fw-bolder mb-5">Jadwal Mobil Donor Darah UDD PMI Kota Malang</h3>
			<!--end::Title-->
			<br>
			<br>
			<!--begin::Statistics-->
			<div class="d-flex flex-center">
				<div class="table">
					<table class="table table-rounded table-striped border gy-7 gs-7 " id="tableJadwal">
						<thead>
							<tr class="fw-bold fs-6 text-dark border-bottom border-dark">
								<th class="min-w-120px">No</th>
								<th class="min-w-120px">Tanggal</th>
								<th class="min-w-120px">Lokasi</th>
								<th class="min-w-120px">Target</th>
								<th class="min-w-140px">Jam Buka</th>
								<th class="min-w-120px">Jam Tutup</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$no = 1;
								foreach($jadwal_mobil as $item){
									$newDate = date("d F Y", strtotime($item->jadwal));
									$jambuka = date("H:i", strtotime($item->jam_buka));
									$jamtutup = date("H:i", strtotime($item->jam_tutup));
									echo'
										<tr>
											<td>'.$no.'</td>
											<td>'.$newDate.'</td>
											<td>'.$item->lokasi.'</td>
											<td>'.$item->target.'</td>
											<td>'.$jambuka.'</td>
											<td>'.$jamtutup.'</td>
										</tr>
									';
									$no++;
								}
							?>
						</tbody>
					</table>
				</div>
			</div>
			<!--end::Statistics-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Wrapper-->