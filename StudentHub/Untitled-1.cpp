#include <iostream>
using namespace std;
struct node
{
    int data;
    struct node *link;

    
 }*head = NULL ;

 void insertatbeg(int v )
 {
    struct node *newnode = (struct node*)  malloc(sizeof(struct node));
            newnode -> data=v;
            newnode -> link=head;
      head=newnode;
 }
 void insertatend(int v )
 {
     node *temp = head;
    struct node *newnode = (struct node*)  malloc(sizeof(struct node));
            newnode -> data=v;
             while(temp->link!=NULL)
       {
        
         temp=temp->link;
       }
       temp->link=newnode;
    
 }
 void insertatspecificpos(int v,int pos)
 {
      node *temp = head;
    
    struct node *newnode = (struct node*)  malloc(sizeof(struct node));
    newnode -> data=v;
      if(head==NULL)
      { int v;
        cout<<" Enter the value to enter at beging: ";
        cin>>v;
      insertatbeg( v );
        
      }

        else 
        {

        while(pos!=1)
       {
        
         temp=temp->link;
         pos--;
       }
       newnode->link=temp->link;
         temp->link=newnode;

       } 


 }

 void deleteatbeg()
{
    if(head==NULL)
    {
        cout<<"List is empty.";
    }
    node*temp=head;
    head=temp->link;
    free(temp);

}

void deleteatend()
{
    node*temp=head;
    while(temp->link->link!=NULL)
    {
         temp=temp->link;
    }

    node *temp1 = temp->link;
    temp->link=NULL;
    free(temp1);

}
void deleteatspecificpos(int pos)
{
    node*temp=head;

     while(pos!=1)
       {     
         temp=temp->link;
         pos--;
       }
       node*temp1 =temp->link;
       temp->link=temp1->link;
       free(temp1);

     
}

void reversell(node *head)
{
    node *prev = NULL;
    node *temp = head;
    node *curr = temp->link;
    while(curr!=NULL)
    {
         
         temp->link=prev;
         prev=temp;
         temp=curr;
        curr = temp->link;
    }
    head=prev;
    cout<<"im head :"<<head->data<<endl;

}



int main() {
int val;
cout<<"Enter value";


    for(int i=0;i<3; i++)
       {
        
            cin>>val;
            struct node *newnode = (struct node*)  malloc(sizeof(struct node));
            newnode -> data=val;
            newnode -> link=NULL;
            if(head == NULL)
            {
                head = newnode;
            }
            else
            {
                 node *temp = head;
                 while(temp->link!=NULL)
                 {
                    temp=temp->link;

                 }
                 temp->link = newnode;

            }
                   

       }
int ch=0;
cout<<"Enter Your choice for Switch case :";
cin>>ch;
switch(ch)
{
    case 1: 
    {
        int v;
        cout<<" Enter the value to enter at beging: ";
        cin>>v;
      insertatbeg( v );
      break;
    }
    case 2:
    {
         int v;
        cout<<" Enter the value to enter at end: ";
        cin>>v;
      insertatend( v );
      break;
    }
    case 3:
    {
         int v; int pos;
         cout<<"Enter position :";
         cin>>pos;
        cout<<" Enter the value to enter at pos: ";
        cin>>v;
      insertatspecificpos(v,pos);
      break;

    }
    case 4:
    {
        cout<<"Deleting first element.\n";
        deleteatbeg();
         break;
    }
    case 5:
    {
        cout<<"Deleting last element.\n";
        deleteatend();
         break;
    }
    case 6:
    {
        int pos;
        cout<<"Enter Pos to delete element : ";
        cin>>pos;
        deleteatspecificpos(pos);
        
        
    }
    case 7:
    { cout<<"reversing SLL :\n ";
       reversell(head);
         break;

    }
    default :
    cout<<"Invalid Entry";
}





 node *temp = head;
      
       while(temp->link!=NULL)
       {
        cout<<temp -> data<<"\n";
          temp=temp->link;
       }
               cout<<temp -> data<<"\n";



    return 0;
}
