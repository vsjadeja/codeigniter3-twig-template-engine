# codeigniter3-twig-template-engine
Integration of Twig template engine with codeigniter3

### Usage
```
$this->load->library('twig');
$data = array('name'=>'Virendra Jadeja', 'email'=>'virendrajadeja84@gmail.com');
$this->twig->parse('welcome.html.twig', $data);
```
