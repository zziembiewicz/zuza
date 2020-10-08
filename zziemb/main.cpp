#include <iostream>
using namespace std;
/*	the algorithm  gives us all odd numbers form 1 to 40 using 'for' loop and 'if' condition
	input: none
	output: odd numbers from 1 to 40
	author:Zuzanna Ziembiewicz */

int main() {
	for(int i=1;i<=40;i++)
	{
		if(i%2==1)
		{
		cout<<i<<endl;
		}
	}
	
	return 0;
}
