<?php

class Movie
{
     private string $title;
     private int $releaseDate;
     private array $actor;
     private bool $favourite;
     
     
     public function __construct(string $title, int $releaseDate, bool $favourite)
     {
          $this->title = $title;
          $this->releaseDate = $releaseDate;
          $this->favourite = $favourite;  
          $this->actor = [];         
     }

     public function getTitle(): string 
     {
         return $this->title;
     }

     public function setTitle(string $title): void
      {
          $this->title = $title;

     }
     
     public function setReleaseDate(int $releaseDate): void
     {
          $this->releaseDate = $releaseDate;

          if($releaseDate >= 2000) {
               echo 'The movie is recent';
          }else{
               echo 'The movie is not recent';
          }
     }
     
     public function addActor($newActor)
     {
          $this->actor[] = $newActor;
          
     }
     public function getActor(): array
     {
          return $this->actor;
     }

     public function getFavourite(): bool 
     {
          return $this->favourite;
     }
     
     public function toggleFavourite(): void
     {
          
          //passe favoris à false s'il était true,
          // et à true s'il était false
          if($this->favourite === true) {
               $this->favourite = false;
               
          }else {
               $this->favourite = true;
          }
         
          
          
     }
     public function isRecent()
     {
         //si le film est sorti en l'an 2000 ou plus
         if ($this->releaseDate >= 2000) {
             return true;  
         }else {
              return false;
         }
         //retourne vrai
         //sinon 
         //retourne faux

     }

     
    }
