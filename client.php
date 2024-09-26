<?php
class Client
{
  private $name;
  private $email;
  private $phone;
  private $salary;

  public function __construct($name, $email, $phone, $salary)
  {
    $this->name = $name;
    $this->email = $email;
    $this->phone = $phone;
    $this->salary = $salary;
  }

  public function getName() { return $this->name; }
  public function getEmail() { return $this->email; }
  public function getPhone() { return $this->phone; }
  public function getSalary() { return $this->salary; }

  public function setName($name) { $this->name = $name; }
  public function setEmail($email) { $this->email = $email; }
  public function setPhone($phone) { $this->phone = $phone; }
  public function setSalary($salary) { $this->salary = $salary; }

  public function calculateIT()
  {
    if ($this->salary > 1800) { return $this->salary * 0.27; }
    if ($this->salary > 900) { return $this->salary * 0.15; }

    return 0;
  }

  public function displayInfo()
  {
    echo "<p>" .
           "<strong>Cliente:</strong> " . $this->getName() . "<br>" .
           "<strong>E-mail:</strong> " . $this->getEmail() . "<br>" .
           "<strong>Telefone:</strong> " . $this->getPhone() . "<br>" .
           "<strong>Salário:</strong> R$" . $this->getSalary() . "<br>" .
           "<strong>Imposto de Renda:</strong> R$" . $this->calculateIT() .
         "</p>";
  }
}
?>