<?php
/**
 * Plugin Name:         WordPress-AJAX-Demo-JSON2HTMLtable
 * Plugin URI:          http://wordpress.org/plugins/multisite-clone-duplicator/
 * Description:         Simple AJAX-Demo for WordPress with simple QUnit tests
 * Author:              Sebastian Lauffer
 * Author URI:          https://github.com/sl5net
 * Version:             0.1
 */

add_action('wp_footer', 'cathy_plugin_demo_action_footer');
function cathy_plugin_demo_action_footer()
{
    echo '<div>WordPress-AJAX-Demo-JSON2HTMLtable</div>';
    wp_enqueue_script('wp-api');

}

add_filter('the_content', 'cathy_plugin_demo_filter_content');
function cathy_plugin_demo_filter_content($content)
{
    $content = '
//	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
//	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>


//<link rel="stylesheet" href="https://code.jquery.com/qunit/qunit-2.9.2.css">
<link rel="stylesheet" href="http://github.com/jquery/qunit/raw/master/qunit/qunit.css" type="text/css" media="screen">
   

  <div id="qunit"></div>
    <div id="qunit-fixture"></div>
    <div id="pageTitle"></div>
//    <script src="https://code.jquery.com/qunit/qunit-2.9.2.js"></script>
    <script type="text/javascript" src="http://github.com/jquery/qunit/raw/master/qunit/qunit.js"></script>
    
<script type="text/javascript">

//https://stackoverflow.com/questions/1836105/how-to-wait-5-seconds-with-jquery
function wait(ms) {
    var defer = $.Deferred();
    setTimeout(function() { defer.resolve(); }, ms);
    return defer;
};

// config.current.ignoreGlobalErrors = true;

//Qunit.test( "global failure", extend( function() {
//    QUnit.pushFailure( error, filePath + ":" + linerNr );
//    }, { validTest: validTest } ) );

// jquery.extend - http://api.jquery.com/jquery.extend/
// https://stackoverflow.com/questions/28514370/referenceerror-extend-is-not-defined

		$("document").ready(function () {

//https://www.testim.io/blog/qunit-tutorial-start-unit-testing-and-measuring-code-coverage/
//https://api.qunitjs.com/config/QUnit.config

 
//https://stackoverflow.com/questions/14481029/how-to-stop-global-failures-in-qunit
    

//QUnit.test(\'usersInnerHTML_check_row_count_column_count\', function(assert) {
//row_count =  $(\'#users\').find(\'tr\').length;
//let row_count = $(\'#users tr\').length;
//         alert("No. Of Rows ::" +rowcount);
//column_count =  $(\'#users\').find(\'td\').length / row_count;
//var trLength = jQuery(\'#users >tr\').length;
//assert.equal(trLength, 10);
//assert.equal($(\'#users tr\').size(), 10);
//assert.equal(column_count, 2);



		});
		


	</script>

<!-- Table to display fetched user data https://www.geeksforgeeks.org/get-and-post-method-using-fetch-api/ -->
      <table id="user"></table> 
      <table id="users"><tr></tr></table> 
<script type="text/javascript">


function a_onClick(id) {
//    document.getElementById("user").textContent = `${u.name}`;
fetch("https://jsonplaceholder.typicode.com/users/" + id) 
    .then(response => response.json()) 
    .then(json => { 
        let li = `<tr><th>ID</th><th>name</th></tr>`; 
            li += `<tr> 
                <td>${json.id}</td>   
                <td>${json.name}</td> 
            </tr>`; 
    document.getElementById("user").innerHTML = li; 
    document.getElementById("user").scrollIntoView();

})
  }
//  GET request using fetch() https://www.geeksforgeeks.org/get-and-post-method-using-fetch-api/
fetch("https://jsonplaceholder.typicode.com/users") 
    .then(response => response.json()) 
    .then(json => { 
        let li = `<tr>
        <th style="white-space: nowrap;">ID</th>
        <th>Name</th>
        <th>User-Name</th>
        <th>Email</th>
        </tr>`; 
        json.forEach(user => { 
            let urlUserId = `http://jsonplaceholder.typicode.com/posts?userId=${user.id}`;
            li += `<tr> 
                <td><a onClick="a_onClick(${user.id})">${user.id}</a></td>   
                <td><a onClick="a_onClick(${user.id})">${user.name}</a></td> 
                <td><a onClick="a_onClick(${user.id})">${user.username}</a></td> 
                <td>${user.email}</td>          
            </tr>`; 
        }); 
    document.getElementById("users").innerHTML = li; 
    
}); 


// Problems with QUunit
//https://stackoverflow.com/questions/61709585/qunit-testing-ajax-calls
//https://stackoverflow.com/questions/61682131/setting-up-qunit-tests-for-ajax-calls

//wait(5000) ; 
   
   
   
function max() {
   var max = -Infinity;
   for (var i = 0; i < arguments.length; i++) {
      if (arguments[i] > max) {
         max = arguments[i];
      }
   }

   return max;
}
//   https://www.sitepoint.com/test-asynchronous-code-qunit/
//TypeError: QUnit.asyncTest is not a function
QUnit.asyncTest(\'max\', function (assert) {
   expect(1);

   window.setTimeout(function() {
      assert.strictEqual(max(3, 1, 2), 3, \'All positive numbers\');
      QUnit.start();
   }, 0); 
});

   
//MethodName_StateUnderTest_ExpectedBehavior
QUnit.test(\'userInnerHTML_IsEmpty_onPageReady\', function(assert) {
    let innerHtml = document.getElementById("user").innerHTML;
    assert.equal(innerHtml, "");
});



QUnit.test(\'ooo\', function(assert) {
    // Result always 0 

setTimeout(function(){alert("hi")}, 2000);

    let innerHTML = document.getElementById("user").innerHTML.toString(); 
    assert.equal(innerHTML, " 5 5 5");
});


QUnit.test(\'bh\', function(assert) {
//    let innerHTMLlength = document.getElementById("user").innerHTML = li;

    // Result always 0 
    let innerHTMLlength = document.getElementById("user").innerHTML.toString().length; 
    assert.equal(innerHTMLlength, 55);
});

QUnit.test(\'usersInnerHTMLlength_Is24\', function(assert) {
// problem: this not reads the updates done by ajax. means that are old data:
    let innerHTMLlength = $("#users").html().toString().length;
    assert.equal(innerHTMLlength, 24);
});

QUnit.test(\'aaaa\', function(assert) {
// problem: this not reads the updates done by ajax. means that are old data:
    let innerHTMLlength = $("#users").html().toString();
    assert.equal(innerHTMLlength, 5);
});

QUnit.test(\'usersInnerHTML_IsNotEmpty_onPageReady\', function(assert) {

//    let innerHtml = document.getElementById("users").innerHTML;
//    let innerHtml = $("users")[0].innerHTML;

// its stays empty:
//let innerHtml = $(\'#users\').find(\'.table\').find(\'td\').text();
//let innerHtml = $("#users").find(".table").find("td").text();
//let innerHtml = $("#users").find("td").text();
//let innerHtml = $("#users").find("table").html().trim().toUpperCase();



//let innerHtml = $("#users").html();

//    let innerHtml = document.getElementById("users").innerText;


    

//    assert.notEqual(innerHtml, "", "don\'t have the same value" );
    
    // work:
//    assert.notOk(55, 66);
    
//    assert.equal(innerHtml, "2");
//    assert.notOk(innerHtml, "");
});


</script>
';
    return $content;
}

?>