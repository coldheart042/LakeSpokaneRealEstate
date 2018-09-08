<?php

/**
 * Created by PhpStorm.
 * User: Richard
 * Date: 11/10/2016
 * Time: 8:22 AM
 */
class page
{
    var $fileName;
    var $index;
    var $Title;

    /**
     * page constructor.
     * @param $fileName
     * @param $index
     * @param $Title
     */
    public function __construct($fileName, $index, $Title)
    {
        $this->fileName = $fileName;
        $this->index = $index;
        $this->Title = $Title;
    }

    /**
     * @return mixed
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @param mixed $fileName
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
    }

    /**
     * @return mixed
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * @param mixed $index
     */
    public function setIndex($index)
    {
        $this->index = $index;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * @param mixed $Title
     */
    public function setTitle($Title)
    {
        $this->Title = $Title;
    }

    public function link(page $currentPage){
        $currentIndex = $currentPage->index;
        if ($currentIndex == 0){
            return "<a href='". $this->fileName ."'>". $this->Title . "</a>";
        }
        elseif ($currentIndex == 1){
            return "<a href='". "../" .$this->fileName ."'>". $this->Title . "</a>";
        }
        else {
            return "<a href='" . str_repeat("../", $currentIndex) . $this->fileName . "'>" . $this->Title . "</a>";
        }
    }
}