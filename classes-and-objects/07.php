<?php
class Dog
{
   private $name;
   private $sex;
   private $mother;
   private $father;

   public function __construct(string $name, string $sex)
   {
       $this->name=$name;
       $this->sex=$sex;
   }

   public function setParents(object $father,object $mother)
   {
       $this->father=$father;
       $this->mother=$mother;
   }

   public function getFatherName():string
   {
       if ($this->father==null){
           return 'Unknown';
       }
       return $this->father->name;
   }

   public function hasSameMother(object $dog2):bool{
       return ($this->mother->name==$dog2->mother->name);
   }
}
