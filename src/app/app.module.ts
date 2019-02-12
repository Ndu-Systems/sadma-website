import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppComponent } from './app.component';
import { declarations, AppRouting } from './app.routing';
import { NominationsComponent } from './nominations/nominations.component';
import { ContactUsComponent } from './contact-us/contact-us.component';
 

@NgModule({
   declarations: [
      AppComponent,
      ...declarations,
      NominationsComponent,
      ContactUsComponent
   ],
   imports: [
      BrowserModule,
      AppRouting
   ],
   providers: [],
   bootstrap: [
      AppComponent
   ]
})
export class AppModule { }
