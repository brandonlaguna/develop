<?php
class Block extends EntidadBase{
    private $id;
    private $title_block_post;
    private $subtitle_block_post;
    private $text_post;
    private $img_predefinida;
    private $img_predefinida2;
    private $style_block_post;
    private $position;
    private $activation;
    private $called_zone;

    public function __construct($adapter) {
        $table ="content_blocks";
        parent:: __construct($table,$adapter);
    }

    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
    }
    public function getTitle()
    {
        return $this->title_block_post;
    }
    public function setTitle($title_block_post)
    {
        $this->title_block_post = $title_block_post;
    }
    public function getSubtitle()
    {
        return $this->subtitle_block_post;
    }
    public function setSubtitle($subtitle_block_post)
    {
        $this->subtitle_block_post = $subtitle_block_post;
    }
    public function getText()
    {
        return $this->text_post;
    }
    public function setText($text_post)
    {
        $this->text_post = $text_post;
    }
    public function getImgDefault()
    {
        return $this->img_predefinida;
    }
    public function setImgDefault($img_predefinida)
    {
        $this->img_predefinida = $img_predefinida;
    }
    public function getImgDefault2()
    {
        return $this->img_predefinida2;
    }
    public function setImgDefault2($img_predefinida2)
    {
        $this->img_predefinida2 = $img_predefinida2;
    }
    public function getStyleType()
    {
        return $this->style_block_post;
    }
    public function setStyleType($style_block_post)
    {
        $this->style_block_post = $style_block_post;
    }
    public function getPosition()
    {
        return $this->activation;
    }
    public function setPosition($position)
    {
        $this->position = $position;
    }
    public function getActivation()
    {
        return $this->activation;
    }
    public function setActivation($activation)
    {
        $this->activation = $activation;
    }
    public function getZone()
    {
        return $this->called_zone;
    }
    public function setZone($called_zone)
    {
        $this->called_zone = $called_zone;
    }

    public function getBlocksByPage()
    {
        $query= "SELECT * FROM content_blocks ORDER BY position ASC";
        $getalluser= $this->db()->query($query);
        return $getalluser;
    }
}
?>