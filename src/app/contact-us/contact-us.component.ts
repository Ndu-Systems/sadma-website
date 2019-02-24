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
  constructor(
    private fb: FormBuilder,
    private http: HttpClient
  ) {
    this.rForm = fb.group({
      firstName: [null, Validators.required],
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

  send(cont) {
    this.http
      .post<any>(`http://sadma.ndu-systems.net/email.php`, cont)
      .subscribe(response => {
        alert('Email Sent');
      });
  }

}
