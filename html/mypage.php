<?php
require './function.php';

$username = '';

if(isset($_COOKIE['SID']) && isset($_SESSION["NAME"])){

  $username = $_SESSION["NAME"];

}else{
  $_SESSION['err'] = 1;
  header('Location: ./login');
  
}
?>
<!DOCTYPE html>
<html>
<head>
<?php
    echo $echo_header;
?>
<title>mypage</title>
</head>
<body>
<nav class="navbar navbar-expand navbar-dark bg-dark fixed-top">
<a class="navbar-brand" href="#">脆弱性データベース</a>
  <div class="collapse navbar-collapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <p class="my-2 text-light">ようこそ <?php echo $username; ?>さん</p>
      </li>

    </ul>
    <ul class="navbar-nav">
        <li class="nav-item">
        <form class="navbar-form" action="/logout">
            <button type="submit" class="btn btn-info" onclick="redirect()">Logout</button>
        </form>
        </li>
    </ul>
  </div>
</nav>
    <div class="container my-3">
	<div class="row">

		<div class="col-md-12">
        <table class="table mt-5 my-3">
            <tr class="result_class_header_tr">
            <th class="result_class_header_tr_id" nowrap="nowrap"><a href="javascript:doSort('a1');">ID&nbsp;</th>
            <th class="result_class_header_tr_title" ><a href="javascript:doSort('a2');">脆弱性</a></th>
            <th class="result_class_header_tr_cvss" nowrap="nowrap"><a href="javascript:doSort('d3');">CVSSv3</a></th>
            <th class="result_class_header_tr_cvss" nowrap="nowrap"><a href="javascript:doSort('d4');">CVSSv2</a></th>
            <th class="result_class_header_tr_date" nowrap="nowrap"><a href="javascript:doSort('d5');">公表日</a></th>
            <th class="result_class_header_tr_date" nowrap="nowrap"><a href="javascript:doSort('d6');">最終更新日</a></th>
        </tr>
        <tr>
        <td align="center" nowrap="nowrap"><a href="#">JVNDB-2018-010079</a></td>
        <td>Apache Traffic Server におけるアクセス制御に関する脆弱性</td>
          <td align="center" nowrap="nowrap">5.3</td>
            <td align="center" nowrap="nowrap">5.0</td>
          <td align="center" nowrap="nowrap">2018/07/06</td>
        <td align="center" nowrap="nowrap">2018/12/05</td>
      </tr>
      <tr>
        <td align="center" nowrap="nowrap"><a href="#">JVNDB-2018-010078</a></td>
        <td>Apache Traffic Server おける HTTP リクエストスマグリングに関する脆弱性</td>
          <td align="center" nowrap="nowrap">6.5</td>
            <td align="center" nowrap="nowrap">4.0</td>
          <td align="center" nowrap="nowrap">2018/03/01</td>
        <td align="center" nowrap="nowrap">2018/12/05</td>
      </tr>
      <tr>
        <td align="center" nowrap="nowrap"><a href="#">JVNDB-2018-010034</a></td>
        <td>Apache Camel Mail におけるパストラバーサルの脆弱性</td>
          <td align="center" nowrap="nowrap">5.3</td>
            <td align="center" nowrap="nowrap">5.0</td>
          <td align="center" nowrap="nowrap">2018/07/09</td>
        <td align="center" nowrap="nowrap">2018/12/04</td>
      </tr>
      <tr>
        <td align="center" nowrap="nowrap"><a href="#">JVNDB-2018-010007</a></td>
        <td>Apache Traffic Server における入力確認に関する脆弱性</td>
          <td align="center" nowrap="nowrap">7.5</td>
            <td align="center" nowrap="nowrap">5.0</td>
          <td align="center" nowrap="nowrap">2018/08/28</td>
        <td align="center" nowrap="nowrap">2018/12/04</td>
      </tr>
      <tr>
        <td align="center" nowrap="nowrap"><a href="#">JVNDB-2018-009792</a></td>
        <td>Apache Cayenne における XML 外部エンティティの脆弱性</td>
          <td align="center" nowrap="nowrap">8.1</td>
            <td align="center" nowrap="nowrap">5.8</td>
          <td align="center" nowrap="nowrap">2018/08/22</td>
        <td align="center" nowrap="nowrap">2018/11/28</td>
      </tr>
      <tr>
        <td align="center" nowrap="nowrap"><a href="#">JVNDB-2018-009741</a></td>
        <td>Apache Tika におけるリソース管理に関する脆弱性</td>
          <td align="center" nowrap="nowrap">5.5</td>
            <td align="center" nowrap="nowrap">4.3</td>
          <td align="center" nowrap="nowrap">2018/09/19</td>
        <td align="center" nowrap="nowrap">2018/11/27</td>
      </tr>
      <tr>
        <td align="center" nowrap="nowrap"><a href="#">JVNDB-2018-009522</a></td>
        <td>Apache Spark におけるセキュリティ機能に関する脆弱性</td>
          <td align="center" nowrap="nowrap">4.2</td>
            <td align="center" nowrap="nowrap">4.9</td>
          <td align="center" nowrap="nowrap">2018/08/13</td>
        <td align="center" nowrap="nowrap">2018/11/20</td>
      </tr>
      <tr>
        <td align="center" nowrap="nowrap"><a href="#">JVNDB-2018-009502</a></td>
        <td>Apache Traffic Server におけるリソース管理に関する脆弱性</td>
          <td align="center" nowrap="nowrap">5.3</td>
            <td align="center" nowrap="nowrap">5.0</td>
          <td align="center" nowrap="nowrap">2018/08/28</td>
        <td align="center" nowrap="nowrap">2018/11/20</td>
      </tr>
      <tr>
        <td align="center" nowrap="nowrap"><a href="#">JVNDB-2018-009276</a></td>
        <td>Apache Sentry におけるアクセス制御に関する脆弱性</td>
          <td align="center" nowrap="nowrap">8.8</td>
            <td align="center" nowrap="nowrap">6.5</td>
          <td align="center" nowrap="nowrap">2018/08/23</td>
        <td align="center" nowrap="nowrap">2018/11/14</td>
      </tr>
      <tr>
        <td align="center" nowrap="nowrap"><a href="#">JVNDB-2018-009224</a></td>
        <td>Apache Traffic Server における入力確認に関する脆弱性</td>
          <td align="center" nowrap="nowrap">7.5</td>
            <td align="center" nowrap="nowrap">5.0</td>
          <td align="center" nowrap="nowrap">2018/08/28</td>
        <td align="center" nowrap="nowrap">2018/11/13</td>
      </tr>
      <tr>
        <td align="center" nowrap="nowrap"><a href="#">JVNDB-2018-009110</a></td>
        <td>Apache Commons Compress におけるリソース管理に関する脆弱性</td>
          <td align="center" nowrap="nowrap">5.5</td>
            <td align="center" nowrap="nowrap">4.3</td>
          <td align="center" nowrap="nowrap">2018/08/16</td>
        <td align="center" nowrap="nowrap">2018/11/07</td>
      </tr>
      <tr>
        <td align="center" nowrap="nowrap"><a href="#">JVNDB-2018-008987</a></td>
        <td>CouchDB における認可・権限・アクセス制御に関する脆弱性</td>
          <td align="center" nowrap="nowrap">7.2</td>
            <td align="center" nowrap="nowrap">9.0</td>
          <td align="center" nowrap="nowrap">2018/08/08</td>
        <td align="center" nowrap="nowrap">2018/11/05</td>
      </tr>
      <tr>
        <td align="center" nowrap="nowrap"><a href="#">JVNDB-2018-008951</a><br /><a href="https://jvn.jp/vu/JVNVU99875465/" target="_blank">(JVNVU#99875465)</a></td>
        <td>Apache Tomcat JK mod_jk Connector にパストラバーサルの脆弱性</td>
          <td align="center" nowrap="nowrap">-</td>
            <td align="center" nowrap="nowrap">-</td>
          <td align="center" nowrap="nowrap">2018/11/01</td>
        <td align="center" nowrap="nowrap">2018/11/02</td>
      </tr>
      <tr>
        <td align="center" nowrap="nowrap"><a href="#">JVNDB-2018-008782</a></td>
        <td>Apache Camel における XML 外部エンティティの脆弱性</td>
          <td align="center" nowrap="nowrap">9.8</td>
            <td align="center" nowrap="nowrap">7.5</td>
          <td align="center" nowrap="nowrap">2018/07/31</td>
        <td align="center" nowrap="nowrap">2018/10/29</td>
      </tr>
      <tr>
        <td align="center" nowrap="nowrap"><a href="#">JVNDB-2018-008742</a></td>
        <td>Apache OpenWhisk における認可・権限・アクセス制御に関する脆弱性</td>
          <td align="center" nowrap="nowrap">9.8</td>
            <td align="center" nowrap="nowrap">7.5</td>
          <td align="center" nowrap="nowrap">2018/07/20</td>
        <td align="center" nowrap="nowrap">2018/10/26</td>
      </tr>
      <tr>
        <td align="center" nowrap="nowrap"><a href="#">JVNDB-2018-008731</a></td>
        <td>Apache Axis におけるクロスサイトスクリプティングの脆弱性</td>
          <td align="center" nowrap="nowrap">6.1</td>
            <td align="center" nowrap="nowrap">4.3</td>
          <td align="center" nowrap="nowrap">2018/07/08</td>
        <td align="center" nowrap="nowrap">2018/10/26</td>
      </tr>
      <tr>
        <td align="center" nowrap="nowrap"><a href="#">JVNDB-2018-008492</a></td>
        <td>Apache Kafka における情報漏えいに関する脆弱性</td>
          <td align="center" nowrap="nowrap">5.4</td>
            <td align="center" nowrap="nowrap">5.5</td>
          <td align="center" nowrap="nowrap">2018/07/26</td>
        <td align="center" nowrap="nowrap">2018/10/19</td>
      </tr>
      <tr>
        <td align="center" nowrap="nowrap"><a href="#">JVNDB-2018-008482</a></td>
        <td>Apache OpenWhisk における認可・権限・アクセス制御に関する脆弱性</td>
          <td align="center" nowrap="nowrap">9.8</td>
            <td align="center" nowrap="nowrap">7.5</td>
          <td align="center" nowrap="nowrap">2018/07/05</td>
        <td align="center" nowrap="nowrap">2018/10/19</td>
      </tr>
      <tr>
        <td align="center" nowrap="nowrap"><a href="#">JVNDB-2018-008472</a></td>
        <td>TomEE コンソールにおけるクロスサイトスクリプティングの脆弱性</td>
          <td align="center" nowrap="nowrap">6.1</td>
            <td align="center" nowrap="nowrap">4.3</td>
          <td align="center" nowrap="nowrap">2018/07/23</td>
        <td align="center" nowrap="nowrap">2018/10/18</td>
      </tr>
      <tr>
        <td align="center" nowrap="nowrap"><a href="#">JVNDB-2018-008335</a></td>
        <td>Apache Ignite における信頼性のないデータのデシリアライゼーションに関する脆弱性</td>
          <td align="center" nowrap="nowrap">9.8</td>
            <td align="center" nowrap="nowrap">7.5</td>
          <td align="center" nowrap="nowrap">2018/07/19</td>
        <td align="center" nowrap="nowrap">2018/10/15</td>
      </tr>
      <tr>
        <td align="center" nowrap="nowrap"><a href="#">JVNDB-2018-008199</a></td>
        <td>Apache Ambari における情報漏えいに関する脆弱性</td>
          <td align="center" nowrap="nowrap">8.1</td>
            <td align="center" nowrap="nowrap">4.3</td>
          <td align="center" nowrap="nowrap">2018/07/18</td>
        <td align="center" nowrap="nowrap">2018/10/10</td>
      </tr>
      <tr>
        <td align="center" nowrap="nowrap"><a href="#">JVNDB-2018-008181</a></td>
        <td>Apache HTTP Server における NULL ポインタデリファレンスに関する脆弱性</td>
          <td align="center" nowrap="nowrap">7.5</td>
            <td align="center" nowrap="nowrap">5.0</td>
          <td align="center" nowrap="nowrap">2018/07/15</td>
        <td align="center" nowrap="nowrap">2018/10/10</td>
      </tr>
      <tr>
        <td align="center" nowrap="nowrap"><a href="#">JVNDB-2018-008128</a></td>
        <td>Apache CXF におけるセキュリティ機能に関する脆弱性</td>
          <td align="center" nowrap="nowrap">8.1</td>
            <td align="center" nowrap="nowrap">6.8</td>
          <td align="center" nowrap="nowrap">2018/06/28</td>
        <td align="center" nowrap="nowrap">2018/10/09</td>
      </tr>
      <tr>
        <td align="center" nowrap="nowrap"><a href="#">JVNDB-2018-008041</a></td>
        <td>Apache Solr における XML 外部エンティティの脆弱性</td>
          <td align="center" nowrap="nowrap">5.5</td>
            <td align="center" nowrap="nowrap">2.1</td>
          <td align="center" nowrap="nowrap">2018/07/04</td>
        <td align="center" nowrap="nowrap">2018/10/05</td>
      </tr>
      <tr>
        <td align="center" nowrap="nowrap"><a href="#">JVNDB-2018-008040</a></td>
        <td>Apache CXF Fediz における入力確認に関する脆弱性</td>
          <td align="center" nowrap="nowrap">7.5</td>
            <td align="center" nowrap="nowrap">5.0</td>
          <td align="center" nowrap="nowrap">2018/07/04</td>
        <td align="center" nowrap="nowrap">2018/10/05</td>
      </tr>
      <tr>
        <td align="center" nowrap="nowrap"><a href="#">JVNDB-2018-008002</a></td>
        <td>Apache Storm におけるアクセス制御に関する脆弱性</td>
          <td align="center" nowrap="nowrap">8.8</td>
            <td align="center" nowrap="nowrap">6.5</td>
          <td align="center" nowrap="nowrap">2018/06/04</td>
        <td align="center" nowrap="nowrap">2018/10/04</td>
      </tr>
      <tr>
        <td align="center" nowrap="nowrap"><a href="#">JVNDB-2018-007943</a></td>
        <td>Apache Spark における情報漏えいに関する脆弱性</td>
          <td align="center" nowrap="nowrap">4.7</td>
            <td align="center" nowrap="nowrap">1.9</td>
          <td align="center" nowrap="nowrap">2018/07/11</td>
        <td align="center" nowrap="nowrap">2018/10/03</td>
      </tr>
</table>
		</div>
	</div>
</div>
</body>