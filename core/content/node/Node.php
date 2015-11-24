<?php
namespace inaden\content\node;

use Inaden;
use yii\base\Object;

class Node extends Object
{
  private $id;
  private $guid;
  private $title;
  private $content;
  private $type;
  private $parent;
  private $author;
  private $categories;
  private $tags;
  private $status;
  private $publicationTime;


  public function __construct($id,NodeTypeInterface $type,$config = [])
  {
    $this->id = $id;
    $this->type = $type;
    parent::__construct($config);
  }

  public function getId() {
    return $this->id;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function getTitle() {
    return $this->title;
  }

  public function setTitle($title) {
    $this->title = trim($title);
  }

  public function getContent() {
    return $this->content;
  }

  public function setContent($content) {
    $this->content = $content;
  }

  public function publish() {
    $publish = NodeStatus::create('publish');
    $this->status = $publish;
  }

  public function unpublish() {
    $status = NodeStatus::create('unpublish');
    $this->status = $status;
  }
}