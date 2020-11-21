<?php


function githubPreehook()
{
    $fp = fopen('rodionGitTest.txt', 'w');
    fwrite($fp, 'Cats chase mice');
    fclose($fp);
}

githubPreehook();
