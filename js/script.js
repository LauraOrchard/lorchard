/**
 * Created by lauraorchard on 6/3/15.
 */
/** collapse and expand the text
 *
 */

$('.row .btn').on('click', function(e) {
	e.preventDefault();
	var $this = $(this);
	var $collapse = $this.closest('.collapse-group').find('.collapse');
	$collapse.collapse('toggle');
});
