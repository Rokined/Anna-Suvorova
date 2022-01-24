<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
mb_internal_encoding('UTF-8');

$id = (int)filter_var(trim($_GET['id']), FILTER_UNSAFE_RAW);



class Project
{
    public $name ;
    public $location ;
    public $yardag ;
    public $design ;
    public $photographer ;
    public $year ;
}

//  <input class="slider__input" type="image" src="/img/id_1/id_1 (2).jpg">
//  '<input class="slider__input" type="image" src="/img/id_' . $id . '/id_' . $id . ' (' . '' . ').jpg">';

require_once '/my-project/anna-suvorova/php/connect.php';

$result = $mysqli->query("SELECT * FROM `projects_db` WHERE `id` = $id");
$result = $result->fetch_all(MYSQLI_ASSOC);
foreach ($result as $result) {
}

$project = new Project;
$project -> name = $result["name"];
$project -> location = $result["location"];
$project -> yardag = $result["yardag"];
$project -> design = $result["design"];
$project -> photographer = $result["photographer"];
$project -> year = $result["year"];

require_once '/my-project/anna-suvorova/template/project.php';

/*
echo ($project->name) . '<br>';
echo ($project->location) . '<br>';
echo ($project->yardag) . '<br>';
echo ($project->design) . '<br>';
echo ($project->photographer) . '<br>';
echo ($project->year) . '<br>';
*/

?>
