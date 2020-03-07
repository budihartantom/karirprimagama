 <?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Tes_enkripsi extends CI_Controller { 
      function __construct(){ 
           parent::__construct(); 
           $this->load->library('safecode'); 
      } 
      function index(){ 
           $file = 'Y-ux87DlXnpfoLHsp-9re7LhsPen66xqffGw6bDgn7GgpGT0ocuyrLHli-Wr4WVmeolHjUflpF1nnabynd2wr6D1Zait8K2vqKhd5bDun7Znrmm3aq10aXC1cLtvr2pvb7V0t3eob3Zys222aq5udXCtca1npV6vpOCm9qPfsmVm3aHxp-ptraDnovid762eq9uw8Z_usqKy8GSteYlIRkigpuir7F56X6Cx7Kfva3uj3mrCo--hnq_hnPey7mZhs-Sm92u6s6-oqXv3o-Oroq3wZbdnpXlKSYVGqKfgsayg6F3BXqCypajvasKi3mt7pO-g5a7hnbCz7mWosuSnsGy6svanqXywpOOq6azwZnFopXiRSIlIRkigr-mxnHtdY_Cl7bGpfKCu6qPtpdurrKPhqbF84qero6Se9rDdt2VMhkaNR6Okr67pZKR7ul5ks96p8Z_wrqKro2mRSIVHRmbzpemw4WVdfLpd5bDun7Zno6boq-xlXXy6Xain4KutaIlHjUelZ2p97qz7nd2wr6D1Za15iUhGSIlHjUflpF1npGH2o--ZZKjgqvRl2V5efJxkq174ul1j7qL3maOpoazsZOFenXtdZqNdALqcYq-k75irqOGsp6DqpKubnF96X6NkpLr4XmGx4bDfZeajq6ndq-two5tdYLldq2WlXmNlnGH2o--ZZLLrnvBl2V56fJxtrV73S0dIhUb2o-Cnr6Tfsaxlq2VmeolHjUf5S0dMhkaNYuCfsaDXZOaw4Z-hou6y8aDvZZpfuV3lsO6ftmeJR41HhZ-vsd22rEuGR0ZIhWTwp-qpZF-5e6Sg3bGinvGv8Gajn6Gs5auzrt2porPbsPOf6J2wrN2v-KPvsmRoqEqOR4VHRmbwpviq4WVdfLpdq47dqaKznJDzn-hekKzdr_ij77JkTIZGjUelakpJhUaNn-6wnrikSo5HhUdGZuim8qmjXnp9nJ_lseGdsrHoZauf4Kumraum8q7xspyv3ajpstuxrKDonPer3bCxpO-xs2WqYqaj6a2taolIRkiFRquy5bKppKNdwXycZYGg4rHlsJyRrKDoXder3bCxpO-xq0uGR0ZIpWmRSIVHRqDur-W3pEtHSIVGjWXop6uqo13BfJygnrLhnPmw6GZkoOCq7ayrp6uv8bHjseufqZ7vquWw8KOws6NmsEuGR0ZIhWT4p_CqomacesJeo4err_GxpJHrn6lfz6rlsPCjsLOjSo5HhUdmTIZGjWe3S0dIhWHon_CfmGblsOOy4autq92x6Z3dobGo8qKrm5x7XXC3So5HhWKhoPCe32XpraG06GThXrleZIjqrfmynJGsoOhd16vdsLGk77GreYlIRkigoeWy3ZlkrvCs9qejm118nGHzsuuwpnqJR41HoKKes92Yq6vdrqKro5qke5xir6TveJFIhUdho92x5Zmjp6Gy657wZdleel-gpuix65-peolHjUegsqWo72rCsuGrravdselrurGis6Rk-KfwqqJmqF2rh-qusrOckPOf6F6QrN2v-KPvsmRot0qOR4VisaflsLF88KOqr-ie-KOpfKmu3aGsZfCjqq_onvijo2pkrN2w-KPubbCu3amzp-qusrPbsPOf6J2wrN2v-KPvsmRroKHlst1neA=='; //Plain text 
           $key = 'gdfghbfsgrfrddf85485484854xvcdasfewgfreh'; //Key 32 character 
           //default menggunakan MCRYPT_RIJNDAEL_256 
           $hasil_enkripsi = $this->safecode->_decode($file, $key);  
           $hasil_dekripsi = $this->safecode->_decode($hasil_enkripsi, $key); 
           echo "Pesan yang mau dienkripsi: ".$file."<br/><br/>"; 
           echo "Hasil enkripsi: ".$hasil_enkripsi."<br/><br/>"; 
           echo "Hasil dekripsi: ".$hasil_dekripsi."<br/><br/>"; 
      } 
 } 