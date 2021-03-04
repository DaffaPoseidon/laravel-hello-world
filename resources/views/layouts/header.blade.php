@extends('layouts.master')

@section('Header')

<div class="headerwrapper">
	<div id="header" class="container">
		<div class="logo"> <a href="#"><img src="images/LOGO.png" alt="logo" width="165" height="74"></a> </div> <!--end of Logo-->
        <nav>
            <ul id="navigations">
                <li><a href="#navigations">HOME</a></li>
                <li> <a href="#slider">ABOUT</a></li>
                <li><a href="#map">LOCATONS</a></li>
                <li><a href="#bestdishes">MENU</a></li>
                <li><a href="#contactus">CONTACT</a></li>
            </ul>
        </nav>
      </div> <!--end of header-->
</div> <!-- end of headerwrapper-->

@endsection