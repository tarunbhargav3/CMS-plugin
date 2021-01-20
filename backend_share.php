<?php
$settings = $this->db->get_settings(1);
$positionSettings = $this->db->get_positionSettings(1);
$currentsc = 'smb-share-buttons';
$currentButtons = esc_html__("Share Buttons", 'smb');
$shareOrFollow = esc_html__("Share On Social Media Text", 'smb');
if ($settings) { ?>
	<div class="smb-outer-wrapper">

		<form id="smb-form" method="post" data-page="share" name="smb-form" action="<?php echo esc_url(home_url()) ?>">

			

			<?php wp_nonce_field('smb_submit', '_wpnonce'); ?>
			<main class="smb-form-tab-wrapper">
				<input class="smb-tabs-input" id="tab1" type="radio" name="tabs" checked>
				<label class="smb-tabs-label" for="tab1">General Settings</label>
				<input class="smb-tabs-input" id="tab2" type="radio" name="tabs">
				<label class="smb-tabs-label" for="tab2">Social Media</label>
				<input class="smb-tabs-input" id="tab3" type="radio" name="tabs">

				<section id="content1">
					<?php include_once $this->base_dir . "/inc/backend-parts/generalform.php"; ?>
					<!-- Section end -->
				</section>
				<section id="content2">
					<div class="smb-follow-wrapper">
						<h2><?php printf(esc_html__('%s: Social Media', 'smb'), $currentButtons);?></h2>
						<p class="headline-description"><?php printf(esc_html__('Choose which social media networks you want to display %s for.', 'smb'), strtolower($currentButtons));?></p>
						
						<table id="media-selection-table" class="smb-follow-wrapper">
							<thead>
								<tr>
									<th><?php echo esc_html__("Social Media", 'smb');?></th>
									<th><?php echo esc_html__("Activate", 'smb');?></th>
								</tr>
							</thead>
							<tbody>
								<?php
								foreach ($settings as &$item) {
									echo '<tr class="smb-follow-item">';
									echo '<td><a href="#" class="smb-follow '.$item['class'].'"></a>';
									echo $item['class']."\n</td>";
									echo '<td><input type="hidden" value="0" name="'.$item['class'].'[share]">';
									echo '<input type="checkbox" name="'.$item['class'].'[share]" '.($item['share']==1?'checked':'').'>';
									echo '<input class="queue-value" type="hidden" value="'.$item['share_queue'].'" name="'.$item['class'].'[share_queue]" />';
									echo '<input class="smb_dragRow" style="cursor: move;" type="button" /></td>';
									echo '</tr>';
								}
								?>
							</tbody>
						</table>
						<!-- -->
					</div>
				</section>
				<section id="content3">
					<?php include_once $this->base_dir . "/inc/backend-parts/designform.php"; ?>
				</section>
				<?php include_once $this->base_dir . "/inc/backend-parts/submitbutton.php"; ?>
			</main>
		</form>


		


	</div>


	<?php
}
?>
