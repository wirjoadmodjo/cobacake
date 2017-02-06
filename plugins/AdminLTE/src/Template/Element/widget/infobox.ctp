<?php

/** 
 * wirjoadmodjo@gmail.com
 * @version	0.1
 * 20170204
 * 
 * Element Widget Infobox
 * file ini merupakan html yang dirubah dlm bentuk ctp
 * agar nantinya lebih dinamis dalam penggunaan widget infobox  
 */

// size infobox
$box['size'] = (isset($box['size']) ? $box['size'] : "");

// color infobox
$box['color'] = (isset($box['color']) ? $box['color'] : "");

// icon infobox
$box['icon'] = (isset($box['icon']) ? $box['icon'] : "");

// data infobox
$box['data'] = (isset($box['data']) ? $box['data'] : "");

// title infobox
$box['title'] = (isset($box['title']) ? $box['title'] : "");

// link infobox
$box['link'] = (isset($box['link']) ? $box['link'] : "");

// percent infobox
$box['percent'] = (isset($box['percent']) ? $box['percent'] : "");

// description infobox
$box['description'] = (isset($box['description']) ? $box['description'] : "");


// switch between type info box
switch ($type) {
	// infobox type 1
	case 1:
	{
			echo '
				<div class="col-md-'.$box['size'].' col-sm-6 col-xs-12">
					<div class="info-box">
						<span class="info-box-icon bg-'.$box['color'].'><i
							class="'.$box['icon'].'></i></span>
				
						<div class="info-box-content">
							<span class="info-box-text">'.$box['title'].'</span> <span
								class="info-box-number">'.$box['data'].'</span>
						</div>
						<!-- /.info-box-content -->
					</div>
					<!-- /.info-box -->
				</div>';
			
			
			/** contoh format infobox type 1 ******************************************************
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="info-box">
					<span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>
			
					<div class="info-box-content">
						<span class="info-box-text">Messages</span> <span
							class="info-box-number">1,410</span>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			***************************************************************************************/			
			break;
		}
		
	// infobox type 2
	case 2:
	{
		echo '				
			<div class="col-md-'.$box['size'].' col-sm-6 col-xs-12">
				<div class="info-box bg-'.$box['color'].'">
					<span class="info-box-icon"><i class="'.$box['icon'].'"></i></span>
			
					<div class="info-box-content">
						<span class="info-box-text">'.$box['title'].'</span> <span
							class="info-box-number">'.$box['data'].'</span>
			
						<div class="progress">
							<div class="progress-bar" style="width: '.$box['percent'].'%"></div>
						</div>
						<span class="progress-description"> '.$box['description'].' </span>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>';
		
		/** contoh format infobox type 2 ***************************************
		 <div class="col-md-3 col-sm-6 col-xs-12">
			<div class="info-box bg-aqua">
				<span class="info-box-icon"><i class="fa fa-bookmark-o"></i></span>
		
				<div class="info-box-content">
					<span class="info-box-text">Bookmarks</span> <span
						class="info-box-number">41,410</span>
		
					<div class="progress">
					<div class="progress-bar" style="width: 70%"></div>
					</div>
					<span class="progress-description"> 70% Increase in 30 Days </span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>		 
		***********************************************************************/		
		break;
	}
	
	// infobox type 3
	case 3:
	{
		echo '
			<div class="col-lg-'.$box['size'].' col-xs-6">
				<!-- small box -->
				<div class="small-box bg-'.$box['color'].'">
					<div class="inner">'.
						$box['data'].'
			
						<p>'.$box['title'].'</p>
					</div>
					<div class="icon">
						<i class="'.$box['icon'].'"></i>
					</div>
					<a href="'.$box['link'].'" class="small-box-footer"> More info <i
						class="fa fa-arrow-circle-right"></i>
					</a>
				</div>
			</div>';
		
		/** contoh format infobox type 3 **************************
		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-aqua">
				<div class="inner">
					<h3>150</h3>
		
					<p>New Orders</p>
				</div>
				<div class="icon">
					<i class="fa fa-shopping-cart"></i>
				</div>
				<a href="#" class="small-box-footer"> More info <i
					class="fa fa-arrow-circle-right"></i>
				</a>
			</div>
		</div>
		**********************************************************/
		break;		
	}
}