<?php

// Redux Custom Fonts from Media Uploads

// REDUX Global VARIABLE
global $kylthemeoptions;

$header_custom_font_url = $kylthemeoptions['customfonts-header']['url'];
$header_custom_font_filename = pathinfo($header_custom_font_url, PATHINFO_FILENAME);

$footer_custom_font_url = $kylthemeoptions['customfonts-footer']['url'];
$footer_custom_font_filename = pathinfo($footer_custom_font_url, PATHINFO_FILENAME);

$body_custom_font_url = $kylthemeoptions['customfonts-body']['url'];
$body_custom_font_filename = pathinfo($body_custom_font_url, PATHINFO_FILENAME);

$h1_custom_font_url = $kylthemeoptions['customfonts-h1']['url'];
$h1_custom_font_filename = pathinfo($h1_custom_font_url, PATHINFO_FILENAME);

$h2_custom_font_url = $kylthemeoptions['customfonts-h2']['url'];
$h2_custom_font_filename = pathinfo($h2_custom_font_url, PATHINFO_FILENAME);

$h3_custom_font_url = $kylthemeoptions['customfonts-h3']['url'];
$h3_custom_font_filename = pathinfo($h3_custom_font_url, PATHINFO_FILENAME);

$h4_custom_font_url = $kylthemeoptions['customfonts-h4']['url'];
$h4_custom_font_filename = pathinfo($h4_custom_font_url, PATHINFO_FILENAME);

$h5_custom_font_url = $kylthemeoptions['customfonts-h5']['url'];
$h5_custom_font_filename = pathinfo($h5_custom_font_url, PATHINFO_FILENAME);

$h6_custom_font_url = $kylthemeoptions['customfonts-h6']['url'];
$h6_custom_font_filename = pathinfo($h6_custom_font_url, PATHINFO_FILENAME);

// echo "font URL is: " . $h1_custom_font_url . "<br>";
// echo "font FAMILY is: " . $h1_custom_font_filename;

?>

<style>
<?php if ( $kylthemeoptions['customfonts-header']['url'] ) { ?>
@font-face {
  font-family: <?php echo( "$header_custom_font_filename" ) ?> ;
  src: url(<?php echo ( "$header_custom_font_url" ) ?>);
}
header ul.menu a {
  font-family: <?php echo( "$header_custom_font_filename" ) ?> ;
}
<?php }; ?>
<?php if ( $kylthemeoptions['customfonts-footer']['url'] ) { ?>
@font-face {
  font-family: <?php echo( "$footer_custom_font_filename" ) ?> ;
  src: url(<?php echo ( "$footer_custom_font_url" ) ?>);
}
footer ul.menu a {
  font-family: <?php echo( "$footer_custom_font_filename" ) ?> ;
}
<?php }; ?>
<?php if ( $kylthemeoptions['customfonts-body']['url'] ) { ?>
@font-face {
  font-family: <?php echo( "$body_custom_font_filename" ) ?> ;
  src: url(<?php echo ( "$body_custom_font_url" ) ?>);
}
body, p {
  font-family: <?php echo( "$body_custom_font_filename" ) ?> ;
}
<?php }; ?>
<?php if ( $kylthemeoptions['customfonts-h1']['url'] ) { ?>
@font-face {
  font-family: <?php echo( "$h1_custom_font_filename" ) ?> ;
  src: url(<?php echo ( "$h1_custom_font_url" ) ?>);
}
h1 {
  font-family: <?php echo( "$h1_custom_font_filename" ) ?> ;
}
<?php }; ?>
<?php if ( $kylthemeoptions['customfonts-h2']['url'] ) { ?>
@font-face {
  font-family: <?php echo( "$h2_custom_font_filename" ) ?> ;
  src: url(<?php echo ( "$h2_custom_font_url" ) ?>);
}
h2 {
  font-family: <?php echo( "$h2_custom_font_filename" ) ?> ;
}
<?php }; ?>
<?php if ( $kylthemeoptions['customfonts-h3']['url'] ) { ?>
@font-face {
  font-family: <?php echo( "$h3_custom_font_filename" ) ?> ;
  src: url(<?php echo ( "$h3_custom_font_url" ) ?>);
}
h3 {
  font-family: <?php echo( "$h3_custom_font_filename" ) ?> ;
}
<?php }; ?>
<?php if ( $kylthemeoptions['customfonts-h4']['url'] ) { ?>
@font-face {
  font-family: <?php echo( "$h4_custom_font_filename" ) ?> ;
  src: url(<?php echo ( "$h4_custom_font_url" ) ?>);
}
h4 {
  font-family: <?php echo( "$h4_custom_font_filename" ) ?> ;
}
<?php }; ?>
<?php if ( $kylthemeoptions['customfonts-h5']['url'] ) { ?>
@font-face {
  font-family: <?php echo( "$h5_custom_font_filename" ) ?> ;
  src: url(<?php echo ( "$h5_custom_font_url" ) ?>);
}
h5 {
  font-family: <?php echo( "$h5_custom_font_filename" ) ?> ;
}
<?php }; ?>
<?php if ( $kylthemeoptions['customfonts-h6']['url'] ) { ?>
@font-face {
  font-family: <?php echo( "$h6_custom_font_filename" ) ?> ;
  src: url(<?php echo ( "$h6_custom_font_url" ) ?>);
}
h6 {
  font-family: <?php echo( "$h6_custom_font_filename" ) ?> ;
}
<?php }; ?>
</style>