<?php
class Dog
{
   private string $name;
   private string $sex;
   private ?Dog $mother;
   private ?Dog $father;

   public function __construct(string $name, string $sex)
   {
       $this->name=$name;
       $this->sex=$sex;
   }

   public function setParents(Dog $father=null,Dog $mother=null)
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

   public function hasSameMother(Dog $dog2):bool{
       return ($this->mother->name==$dog2->mother->name);
   }
}
