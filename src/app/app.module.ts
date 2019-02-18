import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppComponent } from './app.component';
import { declarations, AppRouting } from './app.routing';
import { NominationsComponent } from './nominations/nominations.component';
import { ContactUsComponent } from './contact-us/contact-us.component';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
 

@NgModule({
   declarations: [
      AppComponent,
      ...declarations,
      NominationsComponent,
      ContactUsComponent
   ],
   imports: [
      BrowserModule,
      AppRouting,
      FormsModule,
      ReactiveFormsModule ,
   ],
   providers: [],
   bootstrap: [
      AppComponent
   ]
})
export class AppModule { }
