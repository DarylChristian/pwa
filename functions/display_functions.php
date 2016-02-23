<?php

include_once("functions/logic_functions.php");
include_once("functions/db_functions.php");

function display_home()
{
	echo "<div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
          <h1 class=\"page-header\">Dashboard</h1>
          
          <h2 class=\"sub-header\">My Live Buckets 
            <button class=\"btn btn-md btn-primary\" data-toggle=\"modal\" data-target=\"#getClasses\" >
              Add Bucket  <span class=\"glyphicon glyphicon-plus\"></span>
            </button>
          </h2>
              <!-- start of modal -->
              <div id=\"getClasses\" class=\"modal fade\" role=\"dialog\">
                <div class=\"modal-dialog modal-lg\">
			";            
               	getBucketClasses();        
         echo "
                    
              </div>
              </div>
              <!-- end of modal -->
         <!--start of table -->
         "; 
    	display_live_buckets_board();

    echo "
         <!--end of table-->
        
        </div>";
}



function display_live_buckets_board()
{
  $ooo = 1;
  $admin = 2;
  $del = 3;
  $oncall = 4;
  $onsite = 5;
  $ticket = 6;
  $status = 1;
	echo " <h3 class=\"center_me\">
        <a href=#><span class=\"glyphicon glyphicon-chevron-left\"></span></a>
          February 15 - 20 Period
        <a href=#><span class=\"glyphicon glyphicon-chevron-right\"></span></a>
    </h3>
 <div class=\"table-responsive\">
            <table class=\"table table-condensed  table-fixedheader\">
              <thead>
                <tr class=\"info\">
                  <th class=\"col-md-3\">My Buckets</th>
                  <th class=\"col-md-1 centered\">Total</th>
                  <th class=\"col-md-1 centered\">Mon</th>
                  <th class=\"col-md-1 centered\">Tues</th>
                  <th class=\"col-md-1 centered\">Wed</th>
                  <th class=\"col-md-1 centered\">Thu</th>
                  <th class=\"col-md-1 centered\">Fri</th>
                  <th class=\"col-md-1 centered\">Sat</th>
                  <th class=\"col-md-1 centered\">Sun</th>
                  <th class=\"col-md-1 centered\"></span>Edit</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class=\"col-md-3\"><i>Total</i></td>
                  <td class=\"col-md-1 centered\"></td>
                  <td class=\"col-md-1 centered\">6 hrs</td>
                  <td class=\"col-md-1 centered\">7 hrs</td>
                  <td class=\"col-md-1 centered\">8 hrs</td>
                  <td class=\"col-md-1 centered\">9 hrs</td>
                  <td class=\"col-md-1 centered\">0 hrs</td>
                  <td class=\"col-md-1 centered\">0 hrs</td>
                  <td class=\"col-md-1 centered\">0 hrs</td>
                  <td class=\"col-md-1 centered\"></td>
                </tr>
                <tr class=\"color-gray\">
                  <td data-toggle=\"collapse\" class=\"col-md-3\" data-target=\".ooo1\">Out of Office</td>
                  <td colspan=9 class=\" col-md-9\">
                  </td>
                </tr>
            ";
                  getLiveBuckets($ooo, $status, "ooo");
          echo "
                <tr class=\"color-gray\">
                  <td data-toggle=\"collapse\" class=\"col-md-3\" data-target=\".admin2\">Administrative Tasks</td>
                  <td colspan=9 class=\"col-md-9\">
                  </td>
                </tr>
            ";
                  getLiveBuckets($admin, $status, "admin");
            echo "
                  <tr class=\"color-gray\">
                  <td data-toggle=\"collapse\" class=\"col-md-3\" data-target=\".del3\">Delivery</td>
                  <td colspan=9 class=\"col-md-9\">
                  </td>
                </tr>
            ";
                  getLiveBuckets($del, $status, "del");
           echo "
                <tr class=\"color-gray\">
                  <td data-toggle=\"collapse\" class=\"col-md-3\" data-target=\".sup4\">On-call Support</td>
                  <td colspan=9 class=\"col-md-9\">
                  </td>
                </tr>
            ";
                  getLiveBuckets($oncall, $status, "sup");
        echo "
                <tr class=\"color-gray\">
                  <td data-toggle=\"collapse\" class=\"col-md-3\" data-target=\".sup5\">Onsite Support</td>
                  <td colspan=9 class=\"col-md-9\">
                  </td>
                </tr>
          ";
                  getLiveBuckets($onsite, $status, "sup");
        echo "
                <tr>
                    <td class=\"col-md-12 centered italic\" colspan=10>Ticket Works</td>
                </tr>
              ";
                 getLiveTicketHeader(1, "fof");
                 getLIveTicketHeader(2, "prob");
                 getLIveTicketHeader(3, "req");
                 getLIveTicketHeader(4, "sip");
                 getLIveTicketHeader(5, "cr");

        echo "
              </tbody>
            </table>

          </div>";
}



?>