 {*
* 2007-2012 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2012 PrestaShop SA
*  @version  Release: $Revision: 15368 $
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<script type="text/javascript">
$(function(){
	$('a[href=#idTab5]').click(function(){
		$('*[id^="idTab"]').addClass('block_hidden_only_for_screen');
		$('div#idTab5').removeClass('block_hidden_only_for_screen');

		$('ul#more_info_tabs a[href^="#idTab"]').removeClass('selected');
		$('a[href="#idTab5"]').addClass('selected');
	});
});
</script>



 <div id="product_comments_block_extra">	
 
 {if $nbComments != 0}
 	
 <div class="comments_note">	
 	
<span class="average">{l s='Average grade' mod='productcomments'}&nbsp</span>		
 
 <div class="star_content clearfix">		
 {section name="i" start=0 loop=5 step=1}			
 {if $averageTotal le $smarty.section.i.index}				
 
 <div class="star"></div>			
 
 {else}				
 
 <div class="star star_on"></div>			
 {/if}		
 {/section}	
 	
 </div>	
 
 	
 {if $nbComments != 0}		
 <span class="read"><a href="#idTab5">{l s='Read user reviews' mod='productcomments'} ({$nbComments})</a></span>
 {/if}	
 
 </div>	
 {/if}	
 
  <div class="comments_advices" style="float:right">		
 
 {if ($too_early == false AND ($logged OR $allow_guests))}		
 <a class="open-comment-form" href="#new_comment_form"><img src="{$img_dir}green_icons/comment-black-35.png" alt="Review" title="{l s='Write your review' mod='productcomments'}" width="35" height="35" onmouseover="this.src='{$img_dir}green_icons/comment-green-35.png';" onmouseout="this.src='{$img_dir}green_icons/comment-black-35.png';" /></a>		
 
 {/if}	
 
 </div>
 
 </div>
 
 <!--  /Module ProductComments -->