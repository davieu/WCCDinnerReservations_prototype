<?php
include "../nav.php";
include "reserveTableHTML.html";
include "../footer.php";
/* echo " <br />  <br />  <br />
 <br /> 
 <br /> 
 <br /> 
 <br />
 <h1 style\=\"text-align: center\">Reserve a Table</h1>
 <br /> <br /> 
 <div class\=\"container\">
 <table>
 <tr>
 <th>Date</th>
 <th>Availability</th>
 <th>Waitlisted</th>
 <th>Make a Reservation</th>
 </tr>
 <tr>
 <td>1/29/2021</td>
 <td style=\"background-color: rgb(148, 226, 148)\">10</td>
 <td>No</td>
 <td>
 <select name=\"cars\" id=\"cars\">
 <option value=\"0\">0</option>
 <option value=\"1\">1</option>
 <option value=\"2\">2</option>
 <option value=\"3\" selected=\"selected\">3</option>
 <option value=\"4\">4</option>
 <option value=\"5\">5</option>
 <option value=\"6\">6</option>
 <option value=\"7\">7</option>
 <option value=\"8\">8</option>
 <option value=\"9\">9</option>
 <option value=\"10\">10</option>
 <option value=\"11\">11</option>
 <option value=\"12\">12</option>
 <option value=\"13\">13</option>
 <option value=\"14\">14</option>
 <option value=\"15\">15</option>
 <option value=\"16\">Over 15</option>
 </select>
 </td>
 <!-- <td><a href=\"userInfo.html\" class=\"buttonLinks2\">Reserve Now</a></td> -->
 </tr>
 <tr>
 <td>1/30/2021</td>
 <td>0</td>
 <td style=\"background-color: rgb(243, 166, 166)\">5</td>
 <td>
 <select name=\"cars\" id=\"cars\">
 <option value=\"0\">0</option>
 <option value=\"1\">1</option>
 <option value=\"2\">2</option>
 <option value=\"3\">3</option>
 <option value=\"4\" selected=\"selected\">4</option>
 <option value=\"5\">5</option>
 <option value=\"6\">6</option>
 <option value=\"7\">7</option>
 <option value=\"8\">8</option>
 <option value=\"9\">9</option>
 <option value=\"10\">10</option>
 <option value=\"11\">11</option>
 <option value=\"12\">12</option>
 <option value=\"13\">13</option>
 <option value=\"14\">14</option>
 <option value=\"15\">15</option>
 <option value=\"16\">Over 15</option>
 </select>
 </td>
 <!-- <td><a href=\"userInfo.html\" class=\"buttonLinks2\">Reserve Now</a></td> -->
 </tr>
 <tr>
 <td>1/31/2021</td>
 <td style=\"background-color: rgb(148, 226, 148)\">21</td>
 <td>No</td>
 <td>
 <select name=\"cars\" id=\"cars\">
 <option value=\"0\">0</option>
 <option value=\"1\">1</option>
 <option value=\"2\">2</option>
 <option value=\"3\">3</option>
 <option value=\"4\">4</option>
 <option value=\"5\">5</option>
 <option value=\"6\">6</option>
 <option value=\"7\">7</option>
 <option value=\"8\">8</option>
 <option value=\"9\">9</option>
 <option value=\"10\">10</option>
 <option value=\"11\">11</option>
 <option value=\"12\">12</option>
 <option value=\"13\">13</option>
 <option value=\"14\">14</option>
 <option value=\"15\">15</option>
 <option value=\"16\">Over 15</option>
 </select>
 </td>
 <!-- <td><a href=\"userInfo.html\" class=\"buttonLinks2\">Reserve Now</a></td> -->
 </tr>
 <tr>
 <td>2/1/2021</td>
 <td style=\"background-color: rgb(148, 226, 148)\">9</td>
 <td>No</td>
 <td>
 <select name=\"cars\" id=\"cars\">
 <option value=\"0\">0</option>
 <option value=\"1\">1</option>
 <option value=\"2\">2</option>
 <option value=\"3\">3</option>
 <option value=\"4\">4</option>
 <option value=\"5\">5</option>
 <option value=\"6\">6</option>
 <option value=\"7\">7</option>
 <option value=\"8\">8</option>
 <option value=\"9\">9</option>
 <option value=\"10\">10</option>
 <option value=\"11\">11</option>
 <option value=\"12\">12</option>
 <option value=\"13\">13</option>
 <option value=\"14\">14</option>
 <option value=\"15\">15</option>
 <option value=\"16\">Over 15</option>
 </select>
 </td>
 <!-- <td><a href=\"userInfo.html\" class=\"buttonLinks2\">Reserve Now</a></td> -->
 </tr>
 <tr>
 <td>2/2/2021</td>
 <td style=\"background-color: rgb(148, 226, 148)\">1</td>
 <td>No</td>
 <td>
 <select name=\"cars\" id=\"cars\">
 <option value=\"0\">0</option>
 <option value=\"1\">1</option>
 <option value=\"2\">2</option>
 <option value=\"3\">3</option>
 <option value=\"4\">4</option>
 <option value=\"5\">5</option>
 <option value=\"6\">6</option>
 <option value=\"7\">7</option>
 <option value=\"8\">8</option>
 <option value=\"9\">9</option>
 <option value=\"10\">10</option>
 <option value=\"11\">11</option>
 <option value=\"12\">12</option>
 <option value=\"13\">13</option>
 <option value=\"14\">14</option>
 <option value=\"15\">15</option>
 <option value=\"16\">Over 15</option>
 </select>
 </td>
 <!-- <td><a href=\"userInfo.html\" class=\"buttonLinks2\">Reserve Now</a></td> -->
 </tr>
 <tr>
 <td>2/3/2021</td>
 <td>0</td>
 <td style=\"background-color: rgb(243, 166, 166)\">3</td>
 <td>
 <select name=\"cars\" id=\"cars\">
 <option value=\"0\">0</option>
 <option value=\"1\">1</option>
 <option value=\"2\">2</option>
 <option value=\"3\">3</option>
 <option value=\"4\">4</option>
 <option value=\"5\">5</option>
 <option value=\"6\">6</option>
 <option value=\"7\">7</option>
 <option value=\"8\">8</option>
 <option value=\"9\">9</option>
 <option value=\"10\">10</option>
 <option value=\"11\">11</option>
 <option value=\"12\">12</option>
 <option value=\"13\">13</option>
 <option value=\"14\">14</option>
 <option value=\"15\">15</option>
 <option value=\"16\">Over 15</option>
 </select>
 </td>
 <!-- <td><a href=\"userInfo.html\" class=\"buttonLinks2\">Reserve Now</a></td> -->
 </tr>
 <tr>
 <td>2/4/2021</td>
 <td>0</td>
 <td style=\"background-color: rgb(243, 166, 166)\">10</td>
 <td>
 <select name=\"cars\" id=\"cars\">
 <option value=\"0\">0</option>
 <option value=\"1\">1</option>
 <option value=\"2\">2</option>
 <option value=\"3\">3</option>
 <option value=\"4\">4</option>
 <option value=\"5\">5</option>
 <option value=\"6\">6</option>
 <option value=\"7\">7</option>
 <option value=\"8\">8</option>
 <option value=\"9\">9</option>
 <option value=\"10\">10</option>
 <option value=\"11\">11</option>
 <option value=\"12\">12</option>
 <option value=\"13\">13</option>
 <option value=\"14\">14</option>
 <option value=\"15\">15</option>
 <option value=\"16\">Over 15</option>
 </select>
 </td>
 <!-- <td><a href=\"userInfo.html\" class=\"buttonLinks2\">Reserve Now</a></td> -->
 </tr>
 <tr>
 <td>2/5/2021</td>
 <td style=\"background-color: rgb(148, 226, 148)\">30</td>
 <td>No</td>
 <td>
 <select name=\"cars\" id=\"cars\">
 <option value=\"0\">0</option>
 <option value=\"1\">1</option>
 <option value=\"2\">2</option>
 <option value=\"3\">3</option>
 <option value=\"4\">4</option>
 <option value=\"5\">5</option>
 <option value=\"6\">6</option>
 <option value=\"7\">7</option>
 <option value=\"8\">8</option>
 <option value=\"9\">9</option>
 <option value=\"10\">10</option>
 <option value=\"11\">11</option>
 <option value=\"12\">12</option>
 <option value=\"13\">13</option>
 <option value=\"14\">14</option>
 <option value=\"15\">15</option>
 <option value=\"16\">Over 15</option>
 </select>
 </td>
 <!-- <td><a href=\"userInfo.html\" class=\"buttonLinks2\">Reserve Now</a></td> -->
 </tr>
 <tr>
 <td>2/6/2021</td>
 <td style=\"background-color: rgb(148, 226, 148)\">10</td>
 <td>No</td>
 <td>
 <select name=\"cars\" id=\"cars\">
 <option value=\"0\">0</option>
 <option value=\"1\">1</option>
 <option value=\"2\">2</option>
 <option value=\"3\">3</option>
 <option value=\"4\">4</option>
 <option value=\"5\">5</option>
 <option value=\"6\">6</option>
 <option value=\"7\">7</option>
 <option value=\"8\">8</option>
 <option value=\"9\">9</option>
 <option value=\"10\">10</option>
 <option value=\"11\">11</option>
 <option value=\"12\">12</option>
 <option value=\"13\">13</option>
 <option value=\"14\">14</option>
 <option value=\"15\">15</option>
 <option value=\"16\">Over 15</option>
 </select>
 </td>
 <!-- <td><a href=\"userInfo.html\" class=\"buttonLinks2\">Reserve Now</a></td> -->
 </tr>
 <tr>
 <td>2/7/2021</td>
 <td>0</td>
 <td style=\"background-color: rgb(243, 166, 166)\">13</td>
 <td>
 <select name=\"cars\" id=\"cars\">
 <option value=\"0\">0</option>
 <option value=\"1\">1</option>
 <option value=\"2\">2</option>
 <option value=\"3\">3</option>
 <option value=\"4\">4</option>
 <option value=\"5\">5</option>
 <option value=\"6\">6</option>
 <option value=\"7\">7</option>
 <option value=\"8\">8</option>
 <option value=\"9\">9</option>
 <option value=\"10\">10</option>
 <option value=\"11\">11</option>
 <option value=\"12\">12</option>
 <option value=\"13\">13</option>
 <option value=\"14\">14</option>
 <option value=\"15\">15</option>
 <option value=\"16\">Over 15</option>
 </select>
 </td>
 <!-- <td><a href=\"userInfo.html\" class=\"buttonLinks2\">Reserve Now</a></td> -->
 </tr>
 <tr>
 <td>2/8/2021</td>
 <td style=\"background-color: rgb(148, 226, 148)\">15</td>
 <td>No</td>
 <td>
 <select name=\"cars\" id=\"cars\">
 <option value=\"0\">0</option>
 <option value=\"1\">1</option>
 <option value=\"2\">2</option>
 <option value=\"3\">3</option>
 <option value=\"4\">4</option>
 <option value=\"5\">5</option>
 <option value=\"6\">6</option>
 <option value=\"7\">7</option>
 <option value=\"8\">8</option>
 <option value=\"9\">9</option>
 <option value=\"10\">10</option>
 <option value=\"11\">11</option>
 <option value=\"12\">12</option>
 <option value=\"13\">13</option>
 <option value=\"14\">14</option>
 <option value=\"15\">15</option>
 <option value=\"16\">Over 15</option>
 </select>
 </td>
 <!-- <td><a href=\"userInfo.html\" class=\"buttonLinks2\">Reserve Now</a></td> -->
 </tr>
 <tr>
 <td>2/9/2021</td>
 <td>0</td>
 <td style=\"background-color: rgb(243, 166, 166)\">6</td>
 <td>
 <select name=\"cars\" id=\"cars\">
 <option value=\"0\">0</option>
 <option value=\"1\">1</option>
 <option value=\"2\">2</option>
 <option value=\"3\">3</option>
 <option value=\"4\">4</option>
 <option value=\"5\">5</option>
 <option value=\"6\">6</option>
 <option value=\"7\">7</option>
 <option value=\"8\">8</option>
 <option value=\"9\">9</option>
 <option value=\"10\">10</option>
 <option value=\"11\">11</option>
 <option value=\"12\">12</option>
 <option value=\"13\">13</option>
 <option value=\"14\">14</option>
 <option value=\"15\">15</option>
 <option value=\"16\">Over 15</option>
 </select>
 </td>
 <!-- <td><a href=\"userInfo.html\" class=\"buttonLinks2\">Reserve Now</a></td> -->
 </tr>
 <tr>
 <td>2/10/2021</td>
 <td style=\"background-color: rgb(148, 226, 148)\">12</td>
 <td>No</td>
 <td>
 <select name=\"cars\" id=\"cars\">
 <option value=\"0\">0</option>
 <option value=\"1\">1</option>
 <option value=\"2\">2</option>
 <option value=\"3\">3</option>
 <option value=\"4\">4</option>
 <option value=\"5\">5</option>
 <option value=\"6\">6</option>
 <option value=\"7\">7</option>
 <option value=\"8\">8</option>
 <option value=\"9\">9</option>
 <option value=\"10\">10</option>
 <option value=\"11\">11</option>
 <option value=\"12\">12</option>
 <option value=\"13\">13</option>
 <option value=\"14\">14</option>
 <option value=\"15\">15</option>
 <option value=\"16\">Over 15</option>
 </select>
 </td>
 <!-- <td><a href=\"userInfo.html\" class=\"buttonLinks2\">Reserve Now</a></td> -->
 </tr>
 <br />
 </table>
 <a href=\"userInfo.html\" class=\"buttonLinks2\">Reserve Now</a>
 <br /> </div> "; */
?>