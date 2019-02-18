import { Component, OnInit } from '@angular/core';
import { FormGroup, FormBuilder, Validators } from '@angular/forms';

@Component({
  selector: 'app-contact-us',
  templateUrl: './contact-us.component.html',
  styleUrls: ['./contact-us.component.scss']
})
export class ContactUsComponent implements OnInit {

  rForm : FormGroup;
  firstName: string = "";
  surname: string = "";
  email: string = "";
  cell: string = "";
  message: string = "";
  constructor(
    private fb: FormBuilder
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

}
