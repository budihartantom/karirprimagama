<?php 
is_login(); $otori = $this->session->userdata('pcOtoriName'); if ($otori == '62900') { $data['breadcrumbs'] = array( array( 'link' => base_url('admin/agenda_usbn_un'), 'title' => 'Daftar Agenda USBN/UN' ) ); $data['is_template_active'] = 1; $data['modul'] = 'Daftar Agenda USBN/UN'; $data['btn_new'] = array('url' => base_url('admin/add_agenda_usbn_un')); $this->template->set('title', 'Daftar Agenda USBN/UN'); $this->template->load('template','master/agendast/agenda_usbn_un',$data); } else { redirect('/'); }