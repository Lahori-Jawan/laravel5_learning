<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function about()
	{
		$title1 = 'About';
		$title2 = 'Page';
		
		
		$lipsum_data = 'Lorem ipsum dolor sit amet, consectetur adipisicing 
		elit. Doloremque quaerat labore officia eaque aliquam, mollitia 
		odit in omnis. Harum cupiditate incidunt, provident architecto 
		aperiam illum voluptatibus nulla perspiciatis aliquid. 
		Quos dolorem amet ex consequuntur magnam nostrum repudiandae 
		tenetur consectetur ab, ipsum harum libero cupiditate impedit 
		accusamus rem cumque explicabo iure voluptas est quibusdam. 
		Numquam fugiat iusto cumque, quia consequuntur molestiae 
		repellendus modi, harum animi illum vel, labore hic ab dolorum
		necessitatibus pariatur sit incidunt facere eos nihil aliquid
		dignissimos nisi voluptate possimus. Ipsam velit officia vel 
		consequatur quibusdam perferendis, laboriosam illum ducimus 
		nobis, voluptatum natus. Vel odio laborum placeat, quasi.';

		return view('pages.about', compact('title1', 'title2', 'lipsum_data'));
	}

	

	public function contact()
	{
		return view('pages.contact');
	}

}
