<?php
   namespace App\Test\Entity;
   use App\Entity\Persone;
   use PHPUnit\Framework\TestCase;
   class PersoneTest extends TestCase{
    public function testInvalidage(){
        $p=new Persone('amin','moussi',-3);
        $this->expectException('Exception');
        $p->categorie();
    }
    public function testPersone(){
        $persone= new Persone('ahmed','aaa',19);
        $this-> assertSame("majeur",$persone->categorie());
    }
    public function testFille(){
        $persone= new Persone('hanin','moussi',12);
        $this-> assertSame("mineur",$persone->categorie());
        
    }
   /**
     * @dataProvider ageCD
     */
    public function testSamee($age, $categorie)
    {
        $p = new Persone("Ahmed","gref", $age);
        $this->assertSame($categorie, $p->categorie());
    }

    public function ageCD()
    {
        return [
            [12, "mineur"],   // 12 ans → mineur
            [24, "majeur"],    // 24 ans → majeur
            [10, "mineur"],    // 10 ans → mineur
            [15, "mineur"],    // 15 ans → mineur
        ];
    }
}