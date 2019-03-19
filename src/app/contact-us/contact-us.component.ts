import { Component, OnInit } from '@angular/core';
import { FormGroup, FormBuilder, Validators } from '@angular/forms';
import { HttpClient } from '@angular/common/http';

@Component({
  selector: 'app-contact-us',
  templateUrl: './contact-us.component.html',
  styleUrls: ['./contact-us.component.scss']
})
export class ContactUsComponent implements OnInit {

  rForm: FormGroup;
  firstName = '';
  surname = '';
  email = '';
  cell = '';
  message = '';
  nominee = '';
  subject = '';
  showSuccess = false;

  // checkbox
  marked = false;
  theCheckbox = false;

  // drop-down
  options = ['1. Best record label',
            '2. Best live performance',
            '3. Best dance album'];


  optionSelected: any;

  constructor(
    private fb: FormBuilder,
    private http: HttpClient
  ) {
    this.rForm = fb.group({
      firstName: [null, Validators.required],
      optionSelected: [null, Validators.required],
      subject: 'Client query',
      nominee: [null, Validators.required],
      surname: [null, Validators.required],
      email: [
        null,
        Validators.compose([Validators.required, Validators.minLength(5)])
      ],
      cell: [null, Validators.required],
      message: [
        null,
        Validators.compose([Validators.required, Validators.minLength(15)])
      ]
    });
  }

  ngOnInit() {
  }

  toggleVisibility(e) {
    this.marked = e.target.checked;
  }
  onOptionsSelected(event) {
    this.optionSelected = event;
  }

  send(cont) {
    if (this.marked) {
      cont.message = ` I Nominate ${cont.nominee} <br/> For Category ${cont.optionSelected}`;
      cont.subject = 'Nomination for SADMA';
    }
    this.http
      .post<any>(`http://sadma2012.co.za/email.php`, cont)
      .subscribe(response => {
       this.showSuccess = true;
       this.rForm.reset();
      });
  }

}
