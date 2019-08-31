<div class="main-search">
    <form>
        <input type="text" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}" class="text" />
        <input type="submit" value="">
    </form>
    <div class="close"><img src="{{ asset('vendor/vendor/images/cross.png')}}" /></div>
</div>
<div class="srch">
    <button></button>
</div>
<script type="text/javascript">
    $('.main-search').hide();
    $('button').click(function() {
        $('.main-search').show();
        $('.main-search text').focus();
    });
    $('.close').click(function() {
        $('.main-search').hide();
    });
</script>
<!--/profile_details-->
<div class="profile_details_left">
    <p class="logo">
        <a href=""><img id="logo" width="40%" src="{{ asset('vendor/vendor/rcControls.png') }}"></a>
    </p>
</div>
<div class="clearfix"></div>

