
<?php
use PHPUnit\Framework\TestCase;
use App\Connection;

final class ConnectTest extends TestCase
{
    public function testConnection (){  
        $connect=new Connection();
        $resultado=$connect->Connect();
        $this->assertSame('Conectado!', $resultado);
    }
}